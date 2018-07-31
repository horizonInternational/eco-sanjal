<?php

    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    $this->title = Yii::$app->params['system_name'] . ' | Login';
?>
<?php if (Yii::$app->session->hasFlash('login_error')) : ?>
    <div class = "alert alert-alt alert-danger alert-dismissible" role = "alert">
        <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
            <span aria-hidden = "true">×</span>
        </button>
        <p class = "alert-link">
            <i class = "icon fa-bomb"></i>
            Invalid Username/Password.
        </p>
    </div>
<?php endif; ?>

<div class = "login-register" style = "background-image:url('<?php echo Yii::$app->request->baseUrl ?>/assets/images/background/login-register.jpg');">
    <div class = "login-box card">
        <div class = "card-body">
            <h3 class = "box-title m-b-20 text-center">Login</h3>
            <?php $form = ActiveForm::begin(['class' => 'form-horizontal form-material','id' => 'loginform']); ?>
            <div class = "form-group ">
                <div class = "col-xs-12">
                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Your Username', 'autocomplete' => 'off', 'class' => 'form-control', 'required' => 'required']) ?>
                </div>
            </div>
            <div class = "form-group">
                <div class = "col-xs-12">
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Your Password', 'class' => 'form-control', 'required' => 'required']) ?>
                </div>
            </div>
            <div class = "form-group text-center m-t-20">
                <div class = "col-xs-12">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light', 'name' => 'login-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <p class="text-center">
                <?php echo Yii::$app->params['system_name']; ?>
            </p>
        </div>

    </div>
</div>






