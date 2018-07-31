<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <?= Html::csrfMetaTags() ?>
        <link rel="apple-touch-icon" href="<?php echo Yii::$app->request->baseUrl?>/assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl?>/assets/images/favicon.ico">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,300,100' rel='stylesheet' type='text/css'>
		<link href="<?php echo Yii::$app->request->baseUrl; ?>/global/css/bootstrap.min081a.css" rel="stylesheet">
		<link href="<?php echo Yii::$app->request->baseUrl; ?>/assets/css/error-code.css" rel="stylesheet">
    </head>
    <body class="top-bar-header">
    <?php $this->beginBody() ?>

        <div id="wrapper">
			<?= $content ?>
		</div>

	<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>