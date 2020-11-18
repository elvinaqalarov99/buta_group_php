<?php include_once "send_email.php"; ?>

<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="utf-8" />
    <title>Buta Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Buta Grup Medya Bilişim Teknoloji A.Ş. tam kapsamlı bilişim grubudur." name="description" />
    <meta content="buta,web tasarım,ar-ge,yazılım,dijital pazarlama,stratejik planlama, grafik tasarım" name="keywords" />
    <meta content="Buta Grup" name="author" />

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" href="favicon.ico" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="css/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" />


    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
	<link href="css/coloring.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="wrapper">
        <!-- header begin -->
        <header class="header-light transparent scroll-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between">
                                <div class="align-self-center header-col-left">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.php">
											<img style="width: 210px" alt="" src="images/logo.png" />
										</a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="align-self-center ml-auto header-col-mid">
                                    <!-- mainmenu begin -->
                                    <ul id="mainmenu">
                                        <li>
                                            <a <?php echo $index ?> href="index.php">Ana səhifə</a>
                                        </li>
                                        <li>
                                            <a <?php echo $about ?> href="about-us.php">Biz kimik?</a>
                                        </li>
                                        <li>
                                            <a <?php echo $services ?> href="services.php">Biz nə edirik?</a>
                                        </li>
                                        <li>
                                            <a <?php echo $works ?> href="works.php">Nə etdik?</a>
                                        </li>
                                        <li>
                                            <a <?php echo $news ?> href="news.php">Xəbərlər</a>

                                        </li>
                                    </ul>
                                </div>
                                <div class="align-self-center ml-auto header-col-right">
                                    <a class="btn-custom" href="contact-us.php"><i class="fa fa-arrow-right"></i> ƏLAQƏ</a>
                                    <span id="menu-btn"></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <!-- header close -->