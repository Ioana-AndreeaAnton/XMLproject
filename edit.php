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
                        <?php
                        if(isset($_POST['submit'])){
                            $id=$_POST['id'];
                            $data=simplexml_load_file('data.xml');
                            foreach ($data->date as $date){
                                if($date->id==$id){
                                    unlink($date->image);
                                    $date->nume=$_POST['title'];
                                    $target="./images/".md5(uniqid(time())).basename($_FILES['image']['name']);
                                    $date->image=$target;
                                }
                            }
                            $handle=fopen("data.xml","wb");
                            fwrite($handle, $data->asXML());
                            fclose($handle);
                            
                            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                                header('location: user.php');
                            }else{
                                $msg="Vai! Vai! Vai!";
                            }
                        }
                        ?>
                        <?php
                        $id=$_GET['id'];
                        $data= simplexml_load_file('data.xml');
                        foreach($data->date as $date){
                            if($date->id==$id){
                                ?>
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name='id' value="<?php echo $date->id;?>">
                            Nume:<br><input type="text" name='title' value='<?php echo $date->nume;?>'><br><br>
                            Image:<br><input type='file' name='image'><br><br>
                            <br><img src="<?php echo $date->image; ?>" width="300" height="300"><br/>
                            <input type='submit' name='submit' value='Update'>
                        </form>
                        <?php
                        }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
   