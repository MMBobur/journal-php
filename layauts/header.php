
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>International Journal of Scientific Bulletin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Medical HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher Medical HTML Template v1.0" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/slick/slick.css" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/fancybox/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/animation/animate.min.css" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?= $config['base']['url']; ?>/assets/plugins/timePicker/timePicker.css" />
    <link href="<?= $config['base']['url']; ?>/assets/css/style.css" rel="stylesheet" />
    <link rel="icon" href="<?= $config['base']['url']; ?>/assets/images/favicon.png" type="image/x-icon" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
    <script>
        function change_lang(value){
            Cookies.set('lang', value.target.value);
            window.location.reload();
        }
    </script>
</head>

<body>
    <div class="page-wrapper">
        <!--header top-->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="top-right text-center text-md-right">
                            <ul class="social-links">
                                <li>
                                    <a href="https://themefisher.com/" aria-label="facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://themefisher.com/" aria-label="twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://themefisher.com/" aria-label="google-plus">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://themefisher.com/" aria-label="instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <select id='select_lang' name="lang" onchange='change_lang(event)'>
                                        <option value="uz" <?php echo ($_SESSION['lang'] == "uz") ? 'selected' : ''; ?> >UZ</option>
                                        <option value="en" <?php echo ($_SESSION['lang'] == "en") ? 'selected' : ''; ?> >EN</option>
                                    </select>
								</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top-->

        <!--Header Upper-->
        <section class="header-uper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="logo">
                            <a href="index.php">
                                <img loading="lazy" class="img-fluid" src="assets/images/logo.png" alt="logo" />
                                IJOSB
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div style="float: right;">
                            <ul class="contact-info pl-0 mb-4 mb-md-0">
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <strong>Email</strong>
                                    <br />
                                    <a href="mailto:info@medic.com">
                                        <span>info@medic.com</span>
                                    </a>
                                </li>
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <strong>Call Now</strong>
                                    <br />
                                    <span>+ (88017) - 123 - 4567</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Header Upper-->

        <!--Main Header-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarLinks">
                    <ul class="navbar-nav">
                        <li class="nav-item @@home <?php echo ($page == "index") ? 'active' : ''; ?>">
                            <a class="nav-link" href="index.php">
                                <?php echo constant("home"); ?>
                            </a>
                        </li>
                        <li class="nav-item @@about <?php echo ($page == "current") ? 'active' : ''; ?>">
                            <a class="nav-link" href="?view=send_journal">
                                <?php echo constant("send_journal"); ?>
                            </a>
                        </li>
                        <li class="nav-item @@service">
                            <a class="nav-link" href="?view=archives">
                                <?php echo constant("archives"); ?>
                            </a>
                        </li>
                        <li class="nav-item @@gallery">
                            <a class="nav-link" href="?view=publication_fees">
                                <?php echo constant("publication_fees"); ?>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo constant("about"); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 99; background-color: #48BDC5;">
                                <li>
                                    <a class="dropdown-item " href="?view=about_the_tournal" style="color: white;">
                                        <?php echo constant("about_the_tournal"); ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item activeDetails" href="?view=editorial_team" style="color: white;">
                                        <?php echo constant("editorial_team"); ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item activeDetails" href="?view=privacy_statement" style="color: white;">
                                        <?php echo constant("privacy_statement"); ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End Main Header -->