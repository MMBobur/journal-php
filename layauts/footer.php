        <!--footer-main-->
        <footer class="footer-main">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index.php">
                                            <img loading="lazy" class="img-fluid" src="assets/images/logo.png"
                                                alt="medic" />
                                        </a>
                                    </figure>
                                </div>
                                <ul class="location-link">
                                    <li class="item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p><?=getSite()[0]["address"]?></p>
                                    </li>
                                    <li class="item">
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:<?=getSite()[0]["email"]?>">
                                            <p><?=getSite()[0]["email"]?></p>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <p><?=getSite()[0]["phone"]?></p>
                                    </li>
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container clearfix">
                    <div class="copyright-text">
                        <p>
                            &copy; Copyright <?=date("Y")?>
                            <a href="http://ijsbulletin.com/">Ijsbulletin</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer-main-->

        <!-- scroll-to-top -->
        <div id="back-to-top" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
        <span class="icon fa fa-angle-up"></span>
    </div>


    
    <!-- jquery -->
    <script src="<?= $config['base']['url']; ?>/assets/plugins/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= $config['base']['url']; ?>/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?= $config['base']['url']; ?>/assets/plugins/slick/slick.min.js"></script>
    <script src="<?= $config['base']['url']; ?>/assets/plugins/slick/slick-animation.min.js"></script>
    <!-- FancyBox -->
    <script src="<?= $config['base']['url']; ?>/assets/plugins/fancybox/jquery.fancybox.min.js" defer></script>
    <!-- Google Map -->
    <!-- jquery-ui -->
    <script src="<?= $config['base']['url']; ?>/assets/plugins/jquery-ui/jquery-ui.js" defer></script>
    <!-- timePicker -->
    <script src="<?= $config['base']['url']; ?>/assets/plugins/timePicker/timePicker.js" defer></script>

    <!-- script js -->
    <script src="<?= $config['base']['url']; ?>/assets/js/script.js"></script>
</body>

</html>