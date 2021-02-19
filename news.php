<?php error_reporting(0); include 'dbconnect.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nav.php">
	<link rel="stylesheet" href="assets/css/reset.css"> <!--CSS RESET FOR CONSISTANCE LOOK ON BROWSERS-->
	<link rel="stylesheet" href="assets/css/news.css">

	<?php
		$apiKey = "a7e6d8fd7152437eb8a161fb1206a390";
		$query = "farmer+agriculture";
		$newsApiUrl = "https://newsapi.org/v2/everything?q=" . $query . "&language=en&sortBy=publishedAt&apiKey=" . $apiKey;

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $newsApiUrl);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($ch);

		curl_close($ch);
		$data = json_decode($response);

		$title = array();
		$url = array();
		$urlToImage = array();
		$description = array();
		$publishedAt = array();

		$cnt = 0;

		foreach ($data->articles as $news)
		{
    		array_push($title, $news->title);
    		array_push($url, $news->url);
    		array_push($urlToImage, $news->urlToImage);
    		array_push($description, $news->description);
    		array_push($publishedAt, $news->publishedAt);

    		if (++$cnt > 9)
				break;
		}
	?>

    <style>
        h5 {
            text-transform: uppercase;
            margin: 20px 0;
        }

        h5 span {
            text-transform: lowercase;
        }
		.tile-1 {
			background: url("<?php echo $urlToImage[0]; ?>"); /*suppply background*/
			background-size: cover; /*dont change this, it rescales and cuts the image if it doens't match the tile size*/
		}

		
		.tile-2 {
			background: url("<?php echo $urlToImage[1]; ?>");
			background-size: cover;
			background-position: center;
		}

		.tile-3 {
			background: url("<?php echo $urlToImage[2]; ?>");
			background-size: cover;
		}

		.tile-4 {
			background: url("<?php echo $urlToImage[3]; ?>");
			background-size: cover;
		}

		.tile-5 {
			background: url("<?php echo $urlToImage[4]; ?>");
			background-size: cover;
		}

		.tile-6 {
			background: url("<?php echo $urlToImage[5]; ?>");
			background-size: cover;
		}

		.tile-7 {
			background: url("<?php echo $urlToImage[6]; ?>");
			background-size: cover;
		}

		.tile-8 {
			background: url("<?php echo $urlToImage[7]; ?>");
			background-size: cover;
		}

		.tile-9 {
			background: url("<?php echo $urlToImage[8]; ?>");
			background-size: cover;
		}

    </style>
</head>
<body>
	<!--NAVIGATION BAR STARTS-->
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
	<!--NAVIGATION BAR ENDS-->
	<div class="wrap" onclick="ifNav()">
	<div class="tile-container">
		<h1><ion-icon name="newspaper-outline"></ion-icon>Agricultural News</h1>
		<div class="l-tile tile-1"> <!--tile 1 (large tile)-->
			<div class="tile-text">
				<div class="tile-text-heading"> <!--heading of tile 1-->
					 <?php echo $title[0]; ?>
				</div>
				<div class="tile-text-body">  <!--body text of tile 1-->
						<?php echo $description[0]; ?>
					<a href="<?php echo $url[0]; ?>" class="button">
						More Info  <!--button text-->
					</a>
				</div>
				
			</div>
			<div class="time"><?php echo $publishedAt[0]; ?></div>
		</div>
		<div class="l-tile container-m-tile">
			<div class="m-tile tile-2">
				<div class="tile-text">
					<div class="tile-text-heading"  style="font: 1.5rem Raleway;"> <!--medium tile-2 text-->
						<?php echo $title[1]; ?>
					</div>
					<div class="tile-text-body">
						<a href="<?php echo $url[1]; ?>" class="button">
							More Info
						</a>
					</div>
				</div>	
				<div class="time"><?php echo $publishedAt[1]; ?></div>
			</div>
			<div class="m-tile container-s-tile">
				<div class="s-tile tile-3">
					<div class="tile-text">
						<div class="tile-text-heading" style="font: 1.3rem Raleway;">
							<?php echo $title[2]; ?>      <!--heading of small-tile-4..no body text is there-->
						</div>
					</div>
					<div class="time"><?php echo $publishedAt[2]; ?></div>
				</div>
				<div class="s-tile tile-4">
					<div class="tile-text">
						<div class="tile-text-heading" style="font: 1.3rem Raleway;">
							<?php echo $title[3]; ?>		<!--heading of small-tile-4..no body text is there-->
						</div>
					</div>
					<div class="time"><?php echo $publishedAt[3]; ?></div>
				</div>
			</div>
			
		</div>
		<div class="l-tile container-m-tile">
			<div class="m-tile tile-5">
				<div class="tile-text">
					<div class="tile-text-heading" style="font: 1.5rem Raleway;"> 
						<?php echo $title[4]; ?>   <!--heading of tile-5-->
					</div>
					<div class="tile-text-body">
						<a href="<?php echo $url[4]; ?>" class="button">
							More Info
						</a>
					</div>
				</div>
				<div class="time"><?php echo $publishedAt[4]; ?></div>
			</div>
			<div class="m-tile tile-6">
				<div class="tile-text">
					<div class="tile-text-heading style=" style="font: 1.5rem Raleway;"> 
						<?php echo $title[5]; ?>   <!--heading of tile-6-->
					</div>
					<div class="tile-text-body">
						<a href="<?php echo $url[5]; ?>" class="button">
							More Info
						</a>
					</div>
				</div>
				<div class="time"><?php echo $publishedAt[5]; ?></div>
			</div>
		</div>
		<div class="l-tile tile-7">
			<div class="tile-text">
				<div class="tile-text-heading"> <!--heading of tile 7-->
					<?php echo $title[6]; ?>
				</div>
				<div class="tile-text-body">  <!--body text of tile 7-->
						<?php echo $description[6]; ?>
					<a href="<?php echo $url[6]; ?>" class="button">
						More Info  <!--button text-->
					</a>
				</div>
			</div>
			<div class="time"><?php echo $publishedAt[6]; ?></div>
		</div>
		<div class="l-tile tile-8">
			<div class="tile-text">
				<div class="tile-text-heading"> <!--heading of tile 8-->
					<?php echo $title[7]; ?>
				</div>
				<div class="tile-text-body">  <!--body text of tile 8-->
						<?php echo $description[7]; ?>
					<a href="<?php echo $url[7]; ?>" class="button">
						More Info  <!--button text-->
					</a>
				</div>
			</div>
			<div class="time"><?php echo $publishedAt[7]; ?></div>
		</div>
		<div class="l-tile tile-9">
			<div class="tile-text">
				<div class="tile-text-heading"> <!--heading of tile 9-->
					<?php echo $title[8]; ?>
				</div>
				<div class="tile-text-body">  <!--body text of tile 9-->
						<?php echo $description[8]; ?>
					<a href="<?php echo $url[8]; ?>" class="button">
						More Info  <!--button text-->
					</a>
				</div>
			</div>
			<div class="time"><?php echo $publishedAt[8]; ?></div>
		</div>
	</div>
	</div>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> <!--nyc icons-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/nav.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
