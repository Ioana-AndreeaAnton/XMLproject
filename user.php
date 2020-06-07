<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digital Business Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Digital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>

        <!-- css files -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
        <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
        <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
        <!-- //css files -->

        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <!-- //google fonts -->

    </head>
    <!-- //header -->
    <header class="py-4">
        <div class="container">
            <div id="logo">
                <h1> <a href="index.php"><span class="fa fa-cloud" aria-hidden="true"></span> Digital</a></h1>
            </div>
            <!-- nav -->

            <nav class="d-lg-flex">
                <ul class="menu mt-2 ml-auto">
                    <li class=""><a href="#database">Database</a></li>
                </ul>
                <div class="login-icon ml-lg-2">


                    <?php
                    session_start();
                    if (isset($_SESSION["user_name"])) {
                        $visits = 1;
                        if (isset($_COOKIE["visits"])) {
                            $visits = (int) $_COOKIE["visits"];
                        }
                        setcookie("visits", $visits + 1, time() + 60 * 60 * 24 * 30);
                        echo "<a href='logout.php'>Logout</a>";
                    } else {
                        header('Location:index.php');
                    }
                    ?>
                </div>
            </nav>
            <div class="clear"></div>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
    <!-- banner -->
    <div class="banner" id="home">
        <div class="container">
            <div class="row banner-text">
                <div class="slider-info col-lg-6">
                    <div class="banner-info-grid mt-lg-5">
                        <h2>Welcome Administrator</h2>
                        <h3>Have a nice day!</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
                    <img src="images/bannerpng.png" alt="" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <section class="about py-5" id="database">
        <div class="container py-lg-5 py-sm-3">
            <div class="row">
                <div class="col-lg-3 about-left">
                    <h3 class="heading mb-lg-5 mb-4">Your Clients</h3>
                </div>
                <div class="col-lg-5 col-md-7 about-text">
                   <?php
                   $xslDoc=new DOMDocument();
                   $xslDoc->load("data.xsl");
                   $xmlDoc=new DOMDocument();
                   $xmlDoc->load("data.xml");
                   $proc=new XSLTProcessor();
                   $proc->importStylesheet($xslDoc);
                   echo $proc->transformToXml($xmlDoc);
                   ?>
                    <a href="insert.php">Add new record</a>





                </div>
                <div class="col-lg-4 col-md-5 about-img">
                    <img src="images/1.png" alt="" class="img-fluid"/>
                </div>


            </div>
        </div>
    </section>

