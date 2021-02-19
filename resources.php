<?php error_reporting(0); include 'dbconnect.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resources</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a href="http://agricoop.gov.in/sites/default/files/FFH201819_Eng.pdf">
                        <ion-icon name="download-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="tile tile-2">
                <h1>Farmers Welfare Book</h1>
                <ion-icon name="newspaper-outline"></ion-icon>
                <div class="overlay overlay-2">
                    A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
                    It includes a list of all schemes and programmes launched by various
                    NGO's. Download it
                    <a href="http://agricoop.gov.in/sites/default/files/Handbook_Schemes_Prog_Eng.pdf">
                        <ion-icon name="download-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="tile tile-3">
                <h1>Farm Women Friendly Handbook</h1>
                <ion-icon name="document-outline"></ion-icon>
                <div class="overlay overlay-3">
                    A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
                    It includes a list of all schemes and programmes launched by various
                    NGO's. Download it
                    <a href="http://agricoop.nic.in/sites/default/files/ext_rpt_1.pdf">
                        <ion-icon name="download-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="tile tile-4">
                <h1>All India Farmer Handbook</h1>
                <ion-icon name="clipboard-outline"></ion-icon>
                <div class="overlay overlay-4">
                    A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
                    It includes a list of all schemes and programmes launched by various
                    NGO's. Download it
                    <a href="https://farmer.gov.in/imagedefault/handbooks/Farmer_Handbook_2014.pdf">
                        <ion-icon name="download-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="tile tile-5">
                <h1>Handbook-Programmes</h1>
                <ion-icon name="color-wand-outline"></ion-icon>
                <div class="overlay overlay-5">
                    A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
                    It includes a list of all schemes and programmes launched by various
                    NGO's. Download it
                    <a href="https://farmer.gov.in/imagedefault/handbooks/Farmer_Friendly_Handbook_2016_">
                        <ion-icon name="download-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="tile tile-6">
                <h1>Handbook Schemes</h1>
                <ion-icon name="globe-outline"></ion-icon>
                <div class="overlay overlay-6">
                    A Farmer Friendly Handbook for Schemes & Programmes 2018-19.
                    It includes a list of all schemes and programmes launched by various
                    NGO's. Download it
                    <a href="http://agricoop.gov.in/sites/default/files/Handbook%20Schemes%20%26%20Programme%20%2888%20Pages%29_17-02-18%29-11.pdf">
                        <ion-icon name="download-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive-lg" style="margin-top: 100px; font-family: 'Roboto Mono', monospace; ">
            <table class="table table-bordered" style="width:90%; margin: 0 auto 0 auto;">
                <thead class="thead-dark">
                    <tr>

                        <th scope="col" style="width: 10%;text-align: center;">First</th>
                        <th scope="col" style="text-align: center;">Last</th>

                    </tr>
                </thead>
                <tbody align="center">
                    <tr class="table-primary">

                        <td>Andhra Pradesh</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/farmers-friendly-handbook-andhrapradesh.pdf">Link to the Material for Andhra Pradesh</a></td>

                    </tr>
                    <tr class="table-success">

                        <td>Andaman And Nicobar</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/ANDAMAN%20AND%20NICOBAR.pdf">Link to the Material for Andaman And Nicobar</a></td>

                    </tr>
                    <tr class="table-info">

                        <td>Arunachal Pradesh</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Arunachal.pdf">Link to the Material for Arunachal Pradesh</a></td>

                    </tr>
                    <tr class="table-info">

                        <td>Assam</td>
                        <td><a href="http://agricoop.gov.in/sites/default/files/Farmers_Handbook_Assam.pdf">Link to the Material for Assam</a></td>

                    </tr>
                    <tr class="table-warning">

                        <td>West Bengal</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/farmers-portal-hand-book_bengali.pdf">Link to the Material for West Bengal</a></td>

                    </tr>
                    <tr class="table-success">

                        <td>Bihar</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Pocket-diary-bihar.pdf">Link to the Material for Bihar</a></td>

                    </tr>
                    <tr class="table-primary">

                        <td>Chattisgarh</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/State-book-for-FFH-Chhattisgarh-Hindi-Booklet.pdf">Link to the Material for Chattisgarh</a></td>

                    </tr>
                    <tr class="table-danger">

                        <td>Delhi</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Flyer-Book_Delhi.pdf">Link to the Material for Delhi</a></td>

                    </tr>
                    <tr class="table-success">

                        <td>Goa</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/konkani%202015.pdf">Link to the Material for Goa</a></td>

                    </tr>
                    <tr class="table-warning">

                        <td>Gujarat</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Farmer-Friendly-Handbook_Gujrati.pdf">Link to the Material for Gujarat</a></td>

                    </tr>
                    <tr class="table-primary">

                        <td>Himachal Pradesh</td>
                        <td><a href="http://agricoop.nic.in/sites/default/files/Farmer_Friendly_Handbook_HP_Eng_2017.pdf">Link to the Material for Himachal Pradesh</a></td>

                    </tr>
                    <tr class="table-success">

                        <td>Karnataka</td>
                        <td><a href="http://agricoop.nic.in/sites/default/files/Farmer%20friendly%20handbook%202017-18%20in%20Kannada.pdf">Link to the Material for Karnataka</a></td>

                    </tr>
                    <tr class="table-danger">

                        <td>Kerala</td>
                        <td><a href="http://agricoop.nic.in/sites/default/files/Kerala_2017-18.pdf">Link to the Material for Kerala</a></td>

                    </tr>
                    <tr class="table-primary">

                        <td>Meghalaya</td>
                        <td><a href="http://agricoop.gov.in/farmerfriendlyhandbook/farmer-friendly-handbook-meghalaya-2017-18">Link to the Material for Meghalaya</a></td>

                    </tr>
                    <tr class="table-warning">

                        <td>Mizoram</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Mizoram.pdf">Link to the Material for Mizoram</a></td>

                    </tr>
                    <tr class="table-primary">

                        <td>Nagaland</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Farmer-Friendly-Nagaland-2014.pdf">Link to the Material for Nagaland</a></td>

                    </tr>

                    <tr class="table-info">

                        <td>Orissa</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Orissa.pdf">Link to the Material for Orissa</a></td>

                    </tr>
                    <tr class="table-danger">

                        <td>Puducherry</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Puducherry.pdf">Link to the Material for Puducherry</a></td>

                    </tr>
                    <tr class="table-warning">

                        <td>Punjab</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/ffhbpunjab2016.pdf">Link to the Material for Punjab</a></td>

                    </tr>
                    <tr class="table-primary">

                        <td>Rajasthan</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/rajasthan2015.pdf">Link to the Material for Rajasthan</a></td>

                    </tr>
                    <tr class="table-danger">

                        <td>Sikkim</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Sikkim.pdf">Link to the Material for Sikkim</a></td>

                    </tr>
                    <tr class="table-info">

                        <td>Tamil Nadu</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Farmers%20Hand%20BookTamilnadu2017-18.pdf">Link to the Material for Tamil Nadu</a></td>

                    </tr>
                    <tr class="table-primary">

                        <td>Telangana</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/rythu-snehapurvaka-telangana.pdf">Link to the Material for Telangana</a></td>

                    </tr>
                    <tr class="table-danger">

                        <td>Tripura</td>
                        <td><a href="https://farmer.gov.in/imagedefault/handbooks/Farmrsfriendlyhandbook-T-SAMETI-Tripura_28102014.pdf">Link to the Material for Tripura</a></td>

                    </tr>
                    <tr class="table-success">

                        <td>Uttar Pradesh</td>
                        <td><a href="http://agricoop.gov.in/sites/default/files/Hand%20Book%20UP2017-18.pdf">Link to the Material for Uttar Pradesh</a></td>

                    </tr>
                    <tr class="table-info">

                        <td>Uttarakhand</td>
                        <td><a href="http://agricoop.gov.in/sites/default/files/Farmer_Friendly_Handbook%20_Uttarakhand.pdf">Link to the Material for Uttarakhand</a></td>

                    </tr>

                </tbody>
            </table>
            <br>
            
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
        <!--FOOTER ENDS-->
    </div>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>

</html>
