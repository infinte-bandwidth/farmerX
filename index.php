<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinite Bandwidth</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/art.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/nav.php">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <style>
        h5 {
            text-transform: uppercase;
            margin: 20px 0;
        }

        h5 span {
            text-transform: lowercase;
        }
    </style>
</head>

<body>
    <nav class="h-nav">
        <ion-icon name="menu-outline" onclick="openNav()"></ion-icon>
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






    <!--nyc icons,100% scalable-->
    <!--
    <!--MAIN SLIDE BEGINS-->

    <div id="container" class="mainbg" data-aos="fade-down">
        <img src="assets/images/bg3.jpg" style="height: 760px; width: 100%; ">
        <img src="assets/images/bg4.jpg" style="height: 760px; width: 100%; ">
        <img src="assets/images/bg6.jpg" style="height: 760px;width: 100%; ">
        <img src="assets/images/bg1.jpg" style="height: 760px; width: 100%; ">
        <div class="centered-text" style=" left: 50%;">
            <h2 style="font-size:5vw;  font-family: 'Roboto Mono', monospace; height:100px;">WELCOME TO THE ABODE</h2>
        </div>


    </div>
    <!--MAIN SLIDE ENDS-->



    <!--FAQ SECTION STARTS-->


    <section class="section" id="frequently-question"
        style="background-attachment: fixed; font-family: 'Overpass', sans-serif;">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading" data-aos="fade-right">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-heading" data-aos="fade-left">
                        <p>Vivamus venenatis eu mi ac mattis. Maecenas ut elementum sapien. Nunc euismod risus ac
                            lobortis congue. Sed erat quam.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                    <h5>Class aptent taciti sociosqu ad litora torquent per conubia</h5>
                    <div class="accordion-text" data-aos="fade-up" data-aos-delay="300" style="height: 400px;">
                        <p>Curabitur placerat diam in risus lobortis, laoreet porttitor est elementum. Nulla ultricies
                            risus quis risus scelerisque, a aliquam tellus maximus. Cras pretium nulla ac convallis
                            iaculis. Aenean bibendum erat vitae odio sodales, in facilisis tellus volutpat.</p>
                        <p>Sed lobortis pellentesque magna ac congue. Suspendisse quis molestie magna, id eleifend ex.
                            Ut mollis ultricies diam nec dictum. Morbi commodo hendrerit mi vel vulputate. Proin non
                            tincidunt dui. Lorem ipsum dolor sit amet.</p>
                        <span>Email: <a href=" #">email@company.com</a><br></span>
                        <a href="#contact-us" class="main-button">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="500">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>First Common Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Duis vulputate porttitor urna sit amet pretium. Phasellus sed pulvinar eros,
                                        condimentum consequat ex. Suspendisse potenti.
                                        <br><br>
                                        Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut
                                        eros rutrum sodales. Aliquam erat volutpat.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Second Question Answer</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Sed odio elit, cursus sed consequat at, rutrum eget augue. Cras ac eros iaculis,
                                        tempor quam sit amet, scelerisque mi. Quisque eu risus eget nunc porttitor
                                        vestibulum at a ante.
                                        <br><br>
                                        Praesent ut placerat turpis, vel pellentesque dolor. Sed rutrum eleifend tortor,
                                        eu luctus orci sagittis in. In blandit fringilla mollis.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Third Answer for you</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Proin feugiat ante ut vulputate rutrum. Nam quis erat turpis. Nullam maximus
                                        pharetra lorem, eu condimentum est iaculis ut. Pellentesque mattis ultrices
                                        dignissim.
                                        <br><br>
                                        Etiam et enim finibus, feugiat massa efficitur, finibus sapien. Sed cursus lacus
                                        quis arcu scelerisque, eget ornare risus maximus. Aenean non lectus id odio
                                        rhoncus pharetra.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Fourth Question Asked</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Phasellus eu purus ornare, eleifend orci nec, egestas nulla. Sed sed aliquet
                                        sapien. Proin placerat, ipsum eu posuere blandit, tellus quam consectetur nisi,
                                        id sollicitudin diam ex at nisi.
                                        <br><br>
                                        Aenean fermentum eget turpis egestas semper. Sed finibus mollis venenatis.
                                        Praesent at sem in massa iaculis pharetra.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Fifth Ever Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Quisque aliquet ipsum ut magna rhoncus, euismod lacinia elit rhoncus. Sed sapien
                                        elit, mollis ut ultricies quis, fermentum nec ante.
                                        <br><br>
                                        Sed nec ex nec tortor fermentum sollicitudin id ut ligula. Ut sagittis rutrum
                                        lectus, non sagittis ante euismod eu.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Sixth Sense Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Suspendisse potenti. Ut dapibus leo ut massa vulputate semper. Pellentesque
                                        maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum
                                        sodales. Aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FAQ SECTION ENDS-->

    <div class="mainbg-secondary" data-aos="fade-down">
        <div class="centered-text-secondary" style="left: 50%;">
            <h1 style="font-size: 5vw;height:100px;">WE CARE FOR THE FARMERS.</h1>
        </div>
    </div>






    <!--FOOTER BEGINS-->

    <!-- Site footer -->
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
    </footer>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <!--FOOTER ENDS-->

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

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
        $(window).on("load", function () {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
</body>

</html>

