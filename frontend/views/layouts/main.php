<?php

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amaranth:400,700|Poppins:300,400,600,700" rel="stylesheet">

    <!-- All Plugins Minified -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/plugins.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Icomoon Icons -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/icons.css" rel="stylesheet">

    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/" rel="stylesheet">

    <!-- Custom Styles-->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/responsive.css" rel="stylesheet">

    <!-- Colors -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/color-1.css" rel="stylesheet">

    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- Overrides -->
    <link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/overrides.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

    <script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/jquery.min.js"></script>

    <script>
        var baseUrl = "<?php echo Yii::$app->request->baseUrl; ?>";
        var pop = "";
    </script>
    <?php if (Yii::$app->session->hasFlash('pop')) { ?>
        <script>
            pop = <?php echo Yii::$app->session->getFlash('pop'); ?>;

        </script>
    <?php } ?>
</head>
<body class="">
<?php $this->beginBody() ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
    <a href="http//browsehappy.com/">upgrade your browser</a>
    to improve your experience.
</p><![endif]-->

<div id="page">

    <!-- Page Loader -->
    <div id="pageloader">
        <div class="loader-item fa fa-spin text-color"></div>
    </div>

    <!-- Top Bar -->
    <div id="top-bar" class="top-bar-section top-bar-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Top Contact -->
                    <div class="top-contact link-hover-black">
                        <a href="#">
                            <i class="fa fa-phone"></i>
                            + 123 132 1234
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            ecosanjal@info.com
                        </a>
                    </div>
                    <!-- Top Social Icon -->
                    <div class="top-social-icon icons-hover-black">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-rss"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar -->

    <!-- Sticky Navbar -->
    <header id="sticker" class="sticky-navigation">
        <!-- Sticky Menu -->
        <div class="sticky-menu relative">
            <!-- navbar -->
            <div class="navbar navbar-default navbar-bg-light" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <!-- Button For Responsive toggle -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span style="color:#40d4e4" class="fa fa-user"
                                          id="navCollapse">Login/Register</span></button>


                                <a class="navbar-brand" href="home">
                                    <img class="site_logo" alt="Site Logo" width="190" height="86"
                                         src="<?php echo Yii::$app->request->baseUrl; ?>/common/assets/images/logo.png"/>
                                </a>
                            </div>
                            <!-- Navbar Collapse -->
                            <div class="navbar-collapse collapse toLogin">
                                <!-- nav -->
                                <ul class="nav navbar-nav" style="margin-top:15px">

                                    <!-- Pages Mega Menu -->

                                    <a href="#">Don't you have an account?</a>&emsp;
                                    <button class="btn btn-deault " data-toggle="collapse" data-target="" id="register">
                                        Register
                                    </button>
                                    <button class="btn btn-deault " data-toggle="collapse" data-target="" id="login">
                                        Login
                                    </button>



                                    <!-- Shortcode Menu Ends -->
                                    <!-- Header Search -->

                                </ul>
                                <!-- Right nav -->
                                <!-- Header Contact Content -->
                                <div class="bg-white hide-show-content no-display header-contact-content">
                                    <p class="vertically-absolute-middle">Call Us <strong>+0 (123) 456 78 90</strong>
                                    </p>
                                    <button class="close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>

                                <!-- Header Search Content -->
                                <div class="bg-white hide-show-content no-display header-search-content">
                                    <form role="search" class="navbar-form vertically-absolute-middle">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter your text &amp; Search Here"
                                                   class="form-control" id="s" name="s" value=""/>
                                        </div>
                                    </form>

                                </div>
                                <!-- Header Search Content -->

                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- navbar -->
        </div>
        <!-- Sticky Menu -->
    </header>
    <!-- Sticky Navbar -->

    <!--    login and register form-->
    <div class="container row collapse loginx">
        <span id="close"><i class="fa fa-times pull-right"></i></span>
        <div class="content col-sm-12 col-md-6 col-md-offset-2">
            <form id="contact-form" class="contact-form" method="post">
                <h3 class="title">Don&#39;t have an Account? </h3>


                <div id="success"></div>
                <div class="row" role="form">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="email" placeholder="Name *"/>
                    </div>
                </div>
                <div class="row" role="form">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Email *"/>
                    </div>
                </div>
                <div class="row" role="form">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Password *"/>
                    </div>
                </div>
                <div class="clearfix"></div>
                <button id="submit" class="btn btn-default">Register Now</button>
                <!-- .buttons-box --></form>
        </div>
        <!-- .content -->
        <div class="col-sm-12 col-md-4" style="margin-top: -17px;">
            <form id="contact-form" class=" contact-form " method="post">
                <h3 class="title">Login Now</h3>
                <div id="success">
                    <input class="form-control" type="text" name="name" id="username" placeholder="User Name *"/>
                    <input class="form-control" type="text" name="password" placeholder="Password *"/>
                    <div class="clearfix">
                        <button id="submit" class="btn btn-default">Submit</button>
                        <span class="pull-right">
                            <a href="#" class="text-success forget">Forgot Password?</a>
                        </span>
                    </div>
                </div>
            </form>
            <div class="orSignUp" style="margin-top: 20px;">
                    <a href="#" class="btn btn-md " style="color:#fff ;background: #3b5999;">
                        Sign in with &nbsp;<i class="fa fa-facebook "></i>
                    </a>&nbsp;
                    <a href="#" class="btn btn-md "  style="color:#fff ;background: #dd4b39;">
                       Sign in with &nbsp;<i class="fa fa-google"></i>
                    </a>

            </div>
        </div>
        <!--    login and register form-->
    </div>


        <!-- Page Content -->
        <?= $content ?>

        <!-- Footer -->
        <footer id="footer">

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">Contact Information</h3>
                            </div>
                            <!-- Address -->
                            <p>
                                <strong>Office:</strong> Ejosanjal.com <br/>No. 12, Ribon Building
                            </p>
                            <!-- Phone -->
                            <p>
                                <strong>Call Us:</strong> +0 (123) 456-78-90 or <br/>+0 (123) 456-78-90
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">Quick Links</h3>
                            </div>
                            <nav>
                                <ul>
                                    <!-- List Items -->
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="faq">FAQ</a>
                                    </li>

                                </ul>
                            </nav>


                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title"> Terms & Policies </h3>
                            </div>
                            <div>
                                <!-- Text -->
                                <p>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside
                                    Scoops:</p>
                                <p class="form-message1" style="display: none;"></p>
                                <div class="clearfix"></div>
                                <!-- Form -->

                            </div>
                            <!-- Count -->

                        </div>
                        <!-- .newsletter -->

                        <div class="col-xs-12 col-sm-6 col-md-3 widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title">About us </h3>
                            </div>
                            <nav>
                                <ul class="footer-blog">
                                    <!-- List Items -->
                                    <li>
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipisicing elit.</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-top -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <!-- Copyrights -->
                        <div class="col-xs-10 col-sm-6 col-md-6"> &copy; 2015
                            <a href="http://zozothemes.com/">ecosanjal.com</a>
                            . Creative Agency. <br/>
                            <!-- Terms Link -->

                            <a href="#">Terms of Use</a>
                            /
                            <a href="#">Privacy Policy</a>
                        </div>
                        <div class="col-xs-2 col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
                            <!-- Goto Top -->
                            <a href="#page">
                                <i class="glyphicon glyphicon-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
        </footer>
        <!-- footer -->

    </div>

    <!-- CSRF TOKEN -->
    <script>
        $.ajaxSetup({
            data: {
                _csrf: $('meta[name=csrf-token]').prop('content')
            }
        });
    </script>

    <!--Custom JavaScript -->
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/plugins.min.js"></script>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/bootstrap-datepicker.js"></script>


    <?php $this->endBody(); ?>
    <script src="<?php echo Yii::$app->request->baseUrl; ?>/assets/js/custom.js"></script>

</body>
</html>
<?php $this->endPage(); ?>
