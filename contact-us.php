<?php
$index = '';
$about = '';
$services = '';
$works = '';
$news = '';
include_once "header.php";
?>
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
                    
                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="email.php">
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ad-Soyad:" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="E-poçt:" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Başlıq" />
                        </div>

                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Mesajınız"></textarea>
                        </div>

                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" id="send_message" value="GÖNDƏR" class="btn btn-custom" />
                        </div>
                        <div id="mail_success" class="success">Your message has been sent successfully.</div>
                        <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
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