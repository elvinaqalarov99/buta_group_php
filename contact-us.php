<?php
$index = '';
$about = '';
$services = '';
$works = '';
$news = '';

$message = "";
require_once "config.php";
$sql = "INSERT INTO messages(name,email,subject,message) VALUES (?,?,?,?)"; 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($stmt = mysqli_prepare($link,$sql)){
        mysqli_stmt_bind_param($stmt,"ssss",$param_name,$param_email,$param_subject,$param_message);
        $param_name = $_POST["name"];
        $param_email = $_POST["email"];
        $param_subject = $_POST["subject"];
        $param_message = $_POST["message"];


        if(mysqli_stmt_execute($stmt)){
            // header('location: services.php#form_subscribe');
            $message = "Mesajınız uğurla göndərildi.";

        }else{
            $message = "Üzr istəyirik, bu dəfə mesajınızı göndərərkən xəta baş verdi.";
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);

}
?>
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
                                <li style="display: inline-block;">
                                    <div class="acilan">
                                        <a href="?lang=az" style="padding-bottom: 0;"><img style="width: 20px;height: 20px;" src="images/azerbaijan.png" alt="az"/></a>
                                        <div class="acılan-mezmun">
                                            <a href="?lang=tr"><img style="width: 20px;height: 20px;" src="images/turkey.png" alt="tr"></a>
                                        </div>
                                    </div>
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
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                        <div class="col-md-12 text-center">
                            <h1>Əlaqə</h1>
                            
                        </div>
                        <div class="clearfix"></div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->
    <section class="no-top" data-bgimage="url(images/background/3.png) top">
        <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 offset-md-2 mb-sm-30">
                    <h3>Təklif və tənqidləriniz üçün aşağıdakı formu doldura və ya info@butagrup.com.tr ünvanına e-poçt göndərə bilərsiniz.</h3>
                    
                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ad-Soyad:" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="E-poçt:" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Başlıq" />
                        </div>

                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Mesajınız"></textarea>
                        </div>
                        <?php echo $message ?>
                        
                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" value="GÖNDƏR" class="btn btn-custom" />
                        </div>
                    </form>
                </div>
                
                <div class="spacer-double"></div>
                
                <div class="col-lg-8 offset-md-2 mb30">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="padding40 bg-color-2 text-light box-rounded">
                                <h3>Buta Qrup Medi̇a İnformasi̇ya Texnologi̇yaları Sənaye və Ti̇carət Anoni̇m Şi̇rkəti̇</h3>
                                <address class="s1">
                                    <span><i class="fa fa-map-marker fa-lg"></i>İŞIK Küç. No:20, Tandoğan / ANKARA</span>
                                    <span><i class="fa fa-phone fa-lg"></i>0850 302 28 82</span>
                                   <span> <i  class="fa fa-fax fa-lg"></i>0312 229 00 10</span>
                                    <span>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:info@butagrup.com.tr" target="_top"> info@butagrup.com.tr</a>
                                    </span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>

    </section>

</div>
<!-- content close -->

<?php include_once "footer.php" ?>