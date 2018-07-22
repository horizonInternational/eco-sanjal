<?php
    /* @var $this yii\web\View */
    use common\components\Misc;
    if (Yii::$app->session[Yii::$app->params['user-session']]->role != Yii::$app->params['user_role']['admin']) {
        Misc::forceLogout();
    }
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/users.min.js');

    /* Required for Switches */
    $this->registerJsFile(Yii::$app->request->baseUrl . '/global/vendor/switchery/switchery.min.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/global/js/components/switchery.min.js');

    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.js');
    $this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.css');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/custom/user.js');
    $this->title = Yii::$app->params['system_name'] . ' | Create New Administrator';

?>
<div class="page animsition">
    <form action="<?php echo Yii::$app->request->baseUrl; ?>/user/add-administrator" name="newAdministrator" data-tablename="users" data-action="create-admin" method="post" class="form-horizontal administrator users" enctype="multipart/form-data">
        <input type="hidden" name="<?php echo Yii::$app->request->csrfParam; ?>" value="<?php echo Yii::$app->request->csrfToken; ?>"/>
        <input type="hidden" name="id" value="0" id="edit-id"/>

        <div class="page-header  padding-bottom-0">
            <h1 class="page-title">Create Administrator</h1>

            <div class="page-header-actions">

                <a href="javascript:history.go(-1)" class="btn btn-sm btn-icon btn-warning btn-round" data-toggle="tooltip" data-original-title="Go Back" data-placement="bottom">
                    <i class="icon fa-arrow-left" aria-hidden="true"></i> </a>

                <button type="submit" class="btn btn-sm btn-icon btn-primary  btn-round" data-toggle="tooltip" data-original-title="Save" data-placement="bottom">
                    <i class="icon fa-save" aria-hidden="true"></i>
                </button>

            </div>
        </div>
        <div class="page-content padding-30 container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Name</h5>
                                <input type="text" name="name" class="form-control input-title required" placeholder="Enter Name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="panel padding-top-40">
                        <div class="panel-heading">
                            <h4 class="panel-title">Login Detail</h4>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Username</h5>
                                <input type="text" name="username" class="form-control input-title  required" placeholder="Enter Username" value="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <h5>Password</h5>
                                <input type="password" name="password" id="password" class="form-control input-title required password" placeholder="Enter Password" value="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <h5>Retype Password</h5>
                                <input type="password" id="password_again" name="confirm_password" class="form-control input-title required password_again" placeholder="Retype Password" value="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Email</h5>
                                <input name="email" type="text" class="form-control input-title email" placeholder="Enter Email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Telephone</h5>
                                <input name="phone" type="number" class="form-control input-number" placeholder="Enter Phone" value="">
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Mobile</h5>
                                <input name="mobile" type="number" class="form-control input-number" placeholder="Enter Mobile" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>
</div>