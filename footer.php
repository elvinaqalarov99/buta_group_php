<!-- footer begin -->
<footer class="footer-light">
    <div class="container">
        <div class="row">
			<div class="col-lg-6">
                <div class="widget">
                    <a href="index.php"><img style="width: 210px" alt="" class="logo" src="images/logo.png" /></a>
                    <div class="spacer-20"></div>
                    <p><strong>Buta Grup Medİa İnformasiya Texnalogiyaları A.Ş. tam miqyaslı İT qrupudur.</strong> Yaradıcı komanda,müştərilərinin A’dan Z’ye tüm ehtiyaclarına xidmət edir. Bir şirkət firması korporativ şəxsiyyət, sosial media, veb dizayn / proqram təminatı, elektron ticarət, qrafik dizayn, marka qorunması, rəqəmsal marketinq kimi sahələrdə işləyir.</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="widget">
                    <h5>Səhifələr</h5>
                    <ul>
                        <li><a href="about-us.php">Bizim haqqımızda</a></li>
                        <li><a href="services.php">Biz nə edirik</a></li>
                        <li><a href="works.php">Etdiklərimiz</a></li>
                        <li><a href="contact-us.php">Əlaqə</a></li>
                        <li><a href="news.php">Xəbərlər</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5>Bülleten</h5>

                    <p>Gələnlər qutunuzda ən son xəbərləri, yeniləmələri və xüsusi təklifləri almaq üçün bülletenimizə üzv olun.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'#form_subscribe'); ?>" class="row" id="form_subscribe" method="post" name="form_subscribe">
                        <div class="col text-center">
                            <input class="form-control" id="name_1" name="name_1" placeholder="e-mailinizi daxil edin" type="text" /> <a href="#" onclick="this.closest('form').submit();return false;" id="btn-submit"><i class="arrow_right"></i></a>
                            <?php echo $message;  ?>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div class="spacer-10"></div>
                    <small>Elektron poçtunuz bizimlə təhlükəsizdir. Biz spam göndərmirik</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 sm-text-center mb-sm-30">
                <div class="mt10">&copy; 2020 - Buta Group. Bütün hüquqlar qorunur.</div>
            </div>

            <div class="col-md-6 text-md-right text-sm-left">
                <div class="social-icons">
                    <a href="https://www.facebook.com/butagruptr/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="https://twitter.com/butagrup" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="https://www.instagram.com/butagrup/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                    <a href="https://www.linkedin.com/company/buta-grup/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a href="https://plus.google.com/u/0/103136009122761650644/" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=905302363395" target="_blank"><i class="fa fa-whatsapp fa-lg"></i></a>
                    <a href="https://www.youtube.com/channel/UCHnlDWK84ZgzQRAZgSb65aQ" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer close -->



<div id="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
</div>		



<!-- Javascript Files
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/enquire.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/typed.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/designesia.js"></script>
<script src="js/active.js"></script>



</body>

</html>