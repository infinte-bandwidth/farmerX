<?php include 'dbconnect.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resources</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nav.php">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/resources.css">
	<style>
	
	</style>
</head>
<body>
	 <nav class="h-nav">
        <ion-icon name="menu-outline" onclick="openNav()"></ion-icon>
		<a href="" class="login"><ion-icon name="log-in-outline"></ion-icon></a>
		<a href="" class="sign-up"><ion-icon name="person-add-outline"></ion-icon></a>
    </nav>
    <nav class="v-nav-primary">
        <ion-icon name="return-up-back-outline" onclick="closeNav()"></ion-icon>
        <a href="" class="item1">
            <?php 
            if (isset($_SESSION['username']))
            {
                echo '<ion-icon name=""></ion-icon>';
                echo $_SESSION['username'];
            }
            else
            {
                echo '<ion-icon name="leaf-outline"></ion-icon>';
                echo "Menu";
            }
            ?>
        </a>
        <a href="" class="v-nav-item item2">
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
        <a href="" class="item1">
            <?php 
            if (isset($_SESSION['username']))
            {
                echo "<ion-icon name=''></ion-icon>";
            }
            else
            {
                echo "<ion-icon name='bag-handle'></ion-icon>";
            }
            ?>
            Services
        </a>
        <a href="" class="v-nav-item">
            <ion-icon name="cloudy-night-outline"></ion-icon>
            Weather Forcast
        </a>
        <a href="" class="v-nav-item">
            <ion-icon name="bag-check-outline"></ion-icon>
            Resources
        </a>
        <a href="" class="v-nav-item">
            <ion-icon name="logo-usd"></ion-icon>
            MSP
        </a>
        <a href="" class="v-nav-item">
            <ion-icon name="fish-outline"></ion-icon>
            Major Crops
        </a>
        <a href="" class="v-nav-item">
            <ion-icon name="color-fill-outline"></ion-icon>
            Soil Health Card
        </a>
        <a href="" class="v-nav-item">
            <ion-icon name="finger-print-outline"></ion-icon>
            Agricultural Land
        </a>
    </nav>
    <!--NAVIGATION BAR ENDS-->
	
	
	
	<!--MAIN SLIDE BEGINS-->
	<div class="wrap" onclick="ifNav()">
	
		<div class="tile-container">
			<h1>
				<ion-icon name="information-circle-outline"></ion-icon>
				Resources
			</h1>
			<div class="tile tile-1">
				<h1>Farmer Friendly Handbook</h1>
				<ion-icon name="book-outline"></ion-icon>
				<div class="overlay overlay-1">
					A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
					It includes a list of all schemes and programmes launched by various
					NGO's. Download it
					<a href=""><ion-icon name="download-outline"></ion-icon></a>
				</div>
			</div>
			<div class="tile tile-2">
				<h1>Farmers Welfare Book</h1>
				<ion-icon name="newspaper-outline"></ion-icon>
				<div class="overlay overlay-2">
					A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
					It includes a list of all schemes and programmes launched by various
					NGO's. Download it
					<a href=""><ion-icon name="download-outline"></ion-icon></a>
				</div>
			</div>
			<div class="tile tile-3">
				<h1>Farm Women Friendly Handbook</h1>
				<ion-icon name="document-outline"></ion-icon>
				<div class="overlay overlay-3">
					A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
					It includes a list of all schemes and programmes launched by various
					NGO's. Download it
					<a href=""><ion-icon name="download-outline"></ion-icon></a>
				</div>
			</div>
			<div class="tile tile-4">
				<h1>All India Farmer Handbook</h1>
				<ion-icon name="clipboard-outline"></ion-icon>
				<div class="overlay overlay-4">
					A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
					It includes a list of all schemes and programmes launched by various
					NGO's. Download it
					<a href=""><ion-icon name="download-outline"></ion-icon></a>
				</div>
			</div>
			<div class="tile tile-5">
				<h1>Handbook-Programmes</h1>
				<ion-icon name="color-wand-outline"></ion-icon>
				<div class="overlay overlay-5">
					A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
					It includes a list of all schemes and programmes launched by various
					NGO's. Download it
					<a href=""><ion-icon name="download-outline"></ion-icon></a>
				</div>
			</div>
			<div class="tile tile-6">
				<h1>Handbook Schemes</h1>
				<ion-icon name="globe-outline"></ion-icon>
				<div class="overlay overlay-6">
					A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
					It includes a list of all schemes and programmes launched by various
					NGO's. Download it
					<a href=""><ion-icon name="download-outline"></ion-icon></a>
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
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="#">C</a></li>
                        <li><a href="#">UI Design</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#"">Android</a></li>
                        <li><a href=" #">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Contribute</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                        <a href="#">Sitename</a>.
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
    </footer>  <!--FOOTER ENDS-->
	</div>
	<div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/nav.js"></script>
	<script src="assets/js/resources.js"></script>
    <script>
        AOS.init();
        $(window).on("load", function () {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>
</html>
