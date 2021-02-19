<?php
    error_reporting(0);
    include 'dbconnect.php';
    session_start();
    if(!isset($_SESSION['loggedin']))
    {
	echo "<script> window.alert('Please sign in first.'); 
    window.location='login.php'; </script>";
    }
    else
    {
	$sql = "select * from users where username=" . "'" . $_SESSION['username'] . "'";
	$result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$state=$row['state'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_SESSION['username'];
        $crop = $_POST["crop"];
        $quantity = $_POST["quantity"];
        $price = $_POST['price'];
        $sql = "INSERT INTO `global_market` (`username`, `state`, `crop`, `quantity` ,`price`) VALUES ( '$username', '$state', '$crop', '$quantity','$price');";
        $result = mysqli_query($conn, $sql);
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Connect to Global Market</title>
  </head>

<body>

<div class="container">

    <h1 class="text-center">Add to Global Market</h1>

<form action="show-market.php" method="post">

  <div class="mb-3">
    <label for="crop" class="form-label">Name of Crop</label>
    <input type="text" class="form-control" id="crop" name="crop">
  </div>

  <div class="mb-3">
    <label for="quantity" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity">
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>

  <button type="submit" class="btn btn-primary">Sell your Crop</button>

</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>