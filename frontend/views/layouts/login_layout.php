<?php
/* @var $this SiteController */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Login | Blank Yii 2 Basic Skeleton</title>


        <!-- Styles Link -->
        <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/css/base.css" />
        <link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/css/overrides.css" />

    </head>
    <?php echo $content; ?>
</html>
<?php Yii::$app->user->setState('login_err', null); ?>