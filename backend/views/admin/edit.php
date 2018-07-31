<?php
    /* @var $this yii\web\View */
    use common\components\Misc;

    if (Yii::$app->session[Yii::$app->params['user-session']]->role != Yii::$app->params['user_role']['admin']) {
        Misc::forceLogout();
    }
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/users.min.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/global/vendor/switchery/switchery.min.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/global/js/components/switchery.min.js');

    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.js');
    $this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.css');

    $this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/magnific-popup/magnific-popup.min081a.css?v2.0.0');
    $this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/lightbox/lightbox.min081a.css?v2.0.0');

    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/magnific-popup/jquery.magnific-popup.min.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/lightbox/lightbox.min.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/lightbox/magnific-popup.min.js');

    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/custom/admin.js');

    $this->title = Yii::$app->params['system_name'] . ' | Edit Your Profile';
?>
<div class="page animsition">
    <form action="<?php echo Yii::$app->request->baseUrl; ?>/user/edit-admin" name="editAdministrator" data-tablename="administrator" data-action="edit" method="post" class="form-horizontal administrator users">
        <input type="hidden" name="<?php echo Yii::$app->request->csrfParam; ?>" value="<?php echo Yii::$app->request->csrfToken; ?>"/>
        <input type="hidden" name="id" value="<?php echo !empty($user['id']) ? $user['id'] : 0; ?>" id="edit-id"/>

        <div class="page-header  padding-bottom-0">
            <h1 class="page-title">Edit Your Profile</h1>

            <div class="page-header-actions">

                <a href="javascript:history.go(-1)" class="btn btn-sm btn-icon btn-warning btn-round" data-toggle="tooltip" data-original-title="Go Back" data-placement="bottom">
                    <i class="icon fa-arrow-left" aria-hidden="true"></i> </a>

                <button type="submit" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip" data-original-title="Save" data-placement="bottom">
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
                                <label class="label-control">Username</label>
                                <input type="text" name="username" class="form-control input-title" placeholder="Enter Username" value="<?php echo !empty($user['username']) ? $user['username'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <label class="label-control">Name</label>
                                <input type="text" name="name" class="form-control input-title" placeholder="Enter Name" value="<?php echo !empty($user['name']) ? $user['name'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <label class="label-control">Email</label>
                                <input name="email" type="text" class="form-control input-title" placeholder="Enter Email" value="<?php echo !empty($user['email']) ? $user['email'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Telephone</h5>
                                <input name="phone" type="number" class="form-control input-number" placeholder="Enter Phone" value="<?php echo !empty($user['phone']) ? $user['phone'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Mobile</h5>
                                <input name="mobile" type="number" class="form-control input-number" placeholder="Enter Mobile" value="<?php echo !empty($user['mobile']) ? $user['mobile'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 col-xlg-6 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Password</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">

                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <h5 style="padding: 0px">New Password</h5>
                                    <input name="new-password" type="text" class="form-control new_password" placeholder="Enter New password">
                                </div>

                                <div class="col-sm-12 col-lg-12 col-md-12 margin-top-10">
                                    <h5 style="padding: 0px">Confirm Password</h5>
                                    <input name="confirm-password" type="text" class="form-control" placeholder="Enter Confirm password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="panel padding-top-40">
                        <div class="panel-heading">
                            <h3 class="panel-title">Status</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="" class="">Active</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="checkbox" class="" name="status" data-plugin="switchery" data-color="#62a8ea" value="1" <?php echo (!empty($user['status']) && $user['status'] == 10) ? "checked" : ''; ?> />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>