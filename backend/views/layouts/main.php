<?php
    use backend\assets\AppAsset;
    use yii\helpers\Html;

    AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang = "<?= Yii::$app->language ?>">
<head>
    <meta charset = "<?= Yii::$app->charset ?>">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- Favicon icon -->
    <link rel = "icon" type = "image/png" sizes = "16x16" href = "<?php echo Yii::$app->request->baseUrl; ?>/../common/assets/images/uploads/fav.png">

    <link href = "<?php echo Yii::$app->request->baseUrl; ?>/assets/css/overrides.css" rel = "stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src = "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

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
<body class = "">
    <?php $this->beginBody() ?>
    <!--[if lt IE 8]>
    <p class = "browserupgrade">You are using an <strong>outdated</strong> browser. Please
        <a href = "http//browsehappy.com/">upgrade your browser</a>
        to improve your experience.
    </p><![endif]-->

    <?= $content ?>

    <!-- CSRF TOKEN -->
    <script>
        $.ajaxSetup({
            data: {
                _csrf: $('meta[name=csrf-token]').prop('content')
            }
        });
    </script>

    <!--Custom JavaScript -->
    <script src = "<?php echo Yii::$app->request->baseUrl; ?>/assets/js/base-functions.js"></script>

    <?php $this->endBody(); ?>

</body>
</html>
<?php $this->endPage(); ?>
