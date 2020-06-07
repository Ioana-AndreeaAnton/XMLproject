<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html lang="en">
            <head>
                <title>Digital Business Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
                <!-- for-mobile-apps -->
                <meta name="viewport" content="width=device-width, initial-scale=1"/>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="keywords" content="Digital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
                <link href="css/font-awesome.min.css" rel="stylesheet"/><!-- fontawesome css -->
                <!-- //css files -->
                <!-- google fonts -->
                <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet"/>
                <!-- //google fonts -->
            </head>
             <header class="py-4">
        <div class="container">
            <div id="logo">
                <h1> <a href="index.php"><span class="fa fa-cloud" aria-hidden="true"></span> Digital</a></h1>
            </div>
            <!-- nav -->
            <nav class="d-lg-flex">
                <div class="login-icon ml-lg-2">
                </div>
            </nav>
            <div class="clear"></div>
            <!-- //nav -->
        </div>
    </header>
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
    <section class="about py-5" id="database">
        <div class="container py-lg-5 py-sm-3">
            <div class="row">
                <div class="col-lg-3 about-left">
                    <h3 class="heading mb-lg-5 mb-4">Your Clients</h3>
                </div>
                <div class="col-lg-5 col-md-7 about-text">
                    <table border="1">
                        <tr bgcolor="#17a2b8">
                            <th style="width:300px">Nume</th>
                            <th style="width:300px">Fotografie</th>
                        </tr>
                        <xsl:for-each select="root/date[id=$id]">
                            <tr>
                                <td style="width:300px">
                                    <xsl:value-of select="nume"/>
                                </td>
                                <td style="width:300px">
                                    <img src="{image}"/>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                    <xsl:element name="a">
                        <xsl:attribute name="href">
                            <xsl:value-of select="root/date/back"/>
                        </xsl:attribute>
                        <span>Back</span>
                    </xsl:element>
                </div>
            </div>
        </div>
    </section>
        </html>
    </xsl:template>
</xsl:stylesheet>
               
      