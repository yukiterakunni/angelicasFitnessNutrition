<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Angelica's Fitness </title>

    <link rel="icon" type="image/png" href="<?php bloginfo(stylesheet_directory)?>/img/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php 
    wp_head()
?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle boton_mobil" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <!--<a class="navbar-brand" href="http://angelicasfitnessnutrition.com">ANGELICA'S <span id="sub-title">FITNESS AND NUTRITION CENTER</span></a>-->
               
                <a href="http://angelicasfitnessnutrition.com"><img id="img-logo" src="<?php bloginfo(stylesheet_directory)?>/img/Horizontal_angelicas_fitness-1.png" alt="logo_img"></a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-afnc" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="https://www.facebook.com/angelicasfitnessnutrition/"><span class="icons icon-facebook-app-logo" id = "logo_facebook"></span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/angelicasfitnessnutrition/"><span class="icons icon-instagram-logo" id = "logo_instagram"></span></a>
                    </li>
                </ul>
                <?php  
                    wp_nav_menu(
                            array(
                                'container' => false,
                                'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
                                'theme_location' => 'top-menu')
                        );
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

