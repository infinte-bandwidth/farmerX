<?php
error_reporting(0);
session_start();
if(isset($_SESSION['loggedin']))
{
	echo "<script> window.alert('You are already logged in.'); 
    window.location='index.php'; </script>";
}
$showAlert = false;
$showError = false;
$captcha;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $username = $_POST["username"];
    $state = $_POST["state"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $img_name = $_FILES['glryimage']['name'];

    $exists = false;

    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
    }

    if (!$captcha) {
        echo "<script> window.alert('Please check the captcha form.'); 
        window.location='signup.php'; </script>";
    }

    $secretKey = "6LdEKVgaAAAAAOm6WolOYzm3qJMs2gsRUW5n-soU";

    $ip = $_SERVER['REMOTE_ADDR'];

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);


    if ($responseKeys["success"]) {

    // check whether  this username Exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = "Username already exists.";
    } else if($state=="Select your state:")
    {
        $showError = "Please select your state.";
    } else {
        if (($password == $cpassword)  && $exists == false) {

            if ($img_name != '') {
                $ext = pathinfo($img_name, PATHINFO_EXTENSION);
                $allowed = ['png', 'gif', 'jpg', 'jpeg'];

                //check if it is valid image type
                if (in_array($ext, $allowed)) {

                    // read image data into a variable for inserting
                    $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));

                    $sql = "INSERT INTO `users` (`username`, `imagedata`, `imagename`, `password`, `dt`, `state`) VALUES ( '$username','$img_data', '$img_name', '$password', current_timestamp(), '$state');";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                    $showAlert = true;
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    }
                }
                else
                {
                    $showError = "Please select a valid image.";
                }
            } else
                {
                    $showError = "Please select an image.";
                }

        } else {
            $showError = "Passwords do not match.";
        }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/loginstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/art.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/nav.php">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/carousel.css">

    <title>Get Registered</title>
</head>

<body>

      <nav class="h-nav">
        <ion-icon name="menu-outline" onclick="openNav()"></ion-icon>
        <?php
        if (!isset($_SESSION['loggedin'])) {
            echo "<a href='login.php' class='login'><ion-icon name='log-in-outline'></ion-icon></a>
	        <a href='signup.php' class='sign-up'><ion-icon name='person-add-outline'></ion-icon></a>";
        } else {
            echo "<a href='logout.php' class='login'><ion-icon name='log-out-outline'></ion-icon></a>";
        }
        ?>
    </nav>
    <nav class="v-nav-primary">
        <ion-icon name="return-up-back-outline" onclick="closeNav()"></ion-icon>
        <a class="item1">
            <?php
            if (isset($_SESSION['username'])) {
                echo '<ion-icon name=""></ion-icon>';
                echo $_SESSION['username'];
            } else {
                echo '<ion-icon name="leaf-outline"></ion-icon>';
                echo "Menu";
            }
            ?>
        </a>
        <a href="index.php" class="v-nav-item item2">
            <ion-icon name="home-outline"></ion-icon>
            Home
        </a>
        <a href="javascript:openServices()" class="v-nav-item">
            <ion-icon name="bar-chart-outline"></ion-icon>
            Services
        </a>
        <a href="" class="v-nav-item">
            <ion-icon name="call-outline"></ion-icon>
            Contact Us
        </a>
    </nav>
    <nav class="v-nav-services">
        <ion-icon name="return-up-back-outline" onclick="closeServices()"></ion-icon>
        <a class="item1">
            <?php
            if (isset($_SESSION['username'])) {
                echo "<ion-icon name=''></ion-icon>";
            } else {
                echo "<ion-icon name='bag-handle'></ion-icon>";
            }
            ?>
            Services
        </a>
        <a href="weather.php" class="v-nav-item">
            <ion-icon name="cloudy-night-outline"></ion-icon>
            Weather Forcast
        </a>
        <a href="resources.php" class="v-nav-item">
            <ion-icon name="bag-check-outline"></ion-icon>
            Resources
        </a>
        <a href="msp.php" class="v-nav-item">
            <ion-icon name="logo-usd"></ion-icon>
            MSP
        </a>
        <a href="market.php" class="v-nav-item">
            <ion-icon name="fish-outline"></ion-icon>
            Market
        </a>
        <a href="news.php" class="v-nav-item">
            <ion-icon name="color-fill-outline"></ion-icon>
            News
        </a>
        <a href="map.php" class="v-nav-item">
            <ion-icon name="finger-print-outline"></ion-icon>
            Agricultural Land
        </a>
    </nav>

    <!--MAIN SLIDE BEGINS-->
<div class="wrap" onclick="ifNav()">
    <div id="container" class="mainbg" data-aos="fade-down">
        <img src="assets/images/login1.jpg" style="height: 760px; width: 100%; ">
        <img src="assets/images/login2.jpg" style="height: 760px; width: 100%; ">
        <img src="assets/images/login1.jpg" style="height: 760px; width: 100%; ">
        <img src="assets/images/login2.jpg" style="height: 760px; width: 100%; ">
        <div class="centered-text" style=" left: 50%;">
            <h2 style="font-size:5vw;  font-family: 'Roboto Mono', monospace; height:100px;">GET STARTED</h2>
        </div>
    </div>
    <!--MAIN SLIDE ENDS-->



    <div class="bodyoflogin">


        <div class="containermain container" data-aos="flip-left">
            <div class="logo" style="margin-top: 0.02px;">
                <p style="font-family: 'Roboto Mono', monospace; height:50px;">Signup to get started</p>
            </div>
            
            <?php
            if ($showAlert) {
                echo "<script> window.alert('Success! Your account has been created.'); 
                window.location='index.php'; </script>";
            }
            if ($showError) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%; margin: 0 auto 0 auto;">
                <strong>Error!</strong> ' . $showError . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>';
            }
            ?>

            <div class="login-item">
                <form action="signup.php" method="post" class="form form-login" enctype="multipart/form-data">
                    <div class="form-field">
                        <label style="height: 55px;" class="user" for="login-username"><span class="hidden">Username</span></label>
                        <input style="height: 55px;" type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username" required>
                    </div>


                    <div class="form-field">
                        <label style="height: 55px;" class="lock" for="login-password"><span class="hidden">Password</span></label>
                        <input style="height: 55px;" type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-field">
                        <label style="height: 55px;" class="lock" for="login-password"><span class="hidden">Password</span></label>
                        <input style="height: 55px;" type="password" class="form-control" id="cpassword" name="cpassword" placeholder=" Confirm Password" required>
                    </div>
                    <div class="form-field">
                        <div class="form-floating">

                            <select class="form-control" style="height:50px; width:1020px;" id="floatingSelect" aria-label="Floating label select example" name="state">
                                <option selected>Select your state:</option>
                                <option name="state" value="Andhra Pradesh">Andhra Pradesh</option>
                                <option name="state" value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option name="state" value="Assam">Assam</option>
                                <option name="state" value="Bihar">Bihar</option>
                                <option name="state" value="Chhattisgarh">Chhattisgarh</option>
                                <option name="state" value="Goa">Goa</option>
                                <option name="state" value="Gujarat">Gujarat</option>
                                <option name="state" value="Haryana">Haryana</option>
                                <option name="state" value="Himachal Pradesh">Himachal Pradesh</option>
                                <option name="state" value="Jharkhand">Jharkhand</option>
                                <option name="state" value="Karnataka">Karnataka</option>
                                <option name="state" value="Kerala">Kerala</option>
                                <option name="state" value="Madhya Pradesh">Madhya Pardesh</option>
                                <option name="state" value="Maharashtra">Maharashtra</option>
                                <option name="state" value="Manipur">Manipur</option>
                                <option name="state" value="Meghalaya">Meghalaya</option>
                                <option name="state" value="Mizoram">Mizoram</option>
                                <option name="state" value="Nagaland">Nagaland</option>
                                <option name="state" value="Odisha">Odisha</option>
                                <option name="state" value="Punjab">Punjab</option>
                                <option name="state" value="Rajasthan">Rajasthan</option>
                                <option name="state" value="Sikkim">Sikkim</option>
                                <option name="state" value="Tamil Nadu">Tamil Nadu</option>
                                <option name="state" value="Telangana">Telangana</option>
                                <option name="state" value="Tripura">Tripura</option>
                                <option name="state" value="Uttar Pradesh">Uttar Pradesh</option>
                                <option name="state" value="Uttarakhand">Uttarakhand</option>
                                <option name="state" value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="logo" style="margin-top: 0.02px;">
                            <p style="font-family: 'Roboto Mono', monospace;">Upload Image</p>
                        </div>
                        <br>
                        <div style="margin-left:80px;">
                            <input type="file" name="glryimage" accept="image/*" />
                        </div>
                    </div>

                    <div class="form-field">
                        <div class="g-recaptcha" data-sitekey="6LdEKVgaAAAAACCUGpNAk0u3qQL18BbrG9G5B0fA" style="margin-left: 360px;"></div>
                    </div>



                    <div class="form-field">
                        <input type="submit" value="Sign Up">
                    </div>
                    <div class=" logo">
                        <p style="font-size:15px;font-family: 'Roboto Mono', monospace; height:50px;">Already registeresd? Login here:<br> <a href="login.php">LOGIN</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="site-footer" style="font-family: 'Roboto Mono', monospace;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p class="text-justify">We at FARMERx aim to radically change the lives and technologies used by farmers to empower them and change their lives drastically.</p>
                    </div>

                    <div class="col-xs-6 col-md-3">

                        <ul class="footer-links">

                            <li><a href="index.php"><img src="assets/images/fmax.png"> </a></li>

                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="weather.php">Weather</a></li>
                            <li><a href="resources.php">Resources</a></li>
                            <li><a href="map.php">Maps</a></li>
                            <li><a href="msp.php">MSPs</a></li>
                            <li><a href="market.php">Global Market</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="signup.php">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                            <a href="index.php">FARMAX</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
	</div>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <!--FOOTER ENDS-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/nav.js"></script>
    <script>
        AOS.init();
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>
</html>
