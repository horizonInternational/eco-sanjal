<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->registerCssFile(Yii::$app->request->baseUrl . '/assets/css/error-code.css');
$this->title = $name;
?>

<div class="container margin-top-70">
    <div class="col-md-offset-1 col-md-5 margin-top-5">
        <h1><?= Html::encode($this->title) ?></h1>
        <h3><?= nl2br(Html::encode($message)) ?></h3>
        <p>The above error occurred while the Web server was processing your request.</p>
        <p>Please contact us if you think this is a server error. Thank you.</p>
        <br>
        <p>Please try the following page.</p>
        <a class="btn btn-sm btn-primary" href="<?php echo Yii::$app->request->baseUrl;?>" role="button">Home</a>
        <a class="btn btn-sm btn-default" href="javascript: history.go(-1)" role="button">Go Back</a>
    </div>

    <div class="col-md-6">
        <img src="<?php echo Yii::$app->request->baseUrl;?>/assets/images/gif-spanner.gif">
    </div>
</div>