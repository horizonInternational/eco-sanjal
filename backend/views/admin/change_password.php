<?php
    /* @var $this yii\web\View */
    use common\components\Misc;

    if (Yii::$app->session[Yii::$app->params['user-session']]->role != Yii::$app->params['user_role']['admin']) {
        Misc::forceLogout();
    }
    $this->title = Yii::$app->params['system_name'] . ' | Change Your Password';
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/custom/admin.js');
?>

<div class="page animsition">
    <div class="page-header  padding-bottom-0">
        <h1 class="page-title">Change Your Password</h1>

        <div class="page-header-actions">
            <a href="javascript:history.go(-1)" class="btn btn-sm btn-icon btn-warning btn-round" data-toggle="tooltip" data-original-title="Go Back" data-placement="bottom">
                <i class="icon fa-arrow-left" aria-hidden="true"></i> </a>
        </div>
    </div>
    <div class="page-content padding-30 container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <form action="<?php echo Yii::$app->request->baseUrl; ?>/user/change-password" name="changePassword" data-tablename="change-password" data-action="admin-password" method="post" class="form-horizontal change-password">
                        <input type="hidden" name="<?php echo Yii::$app->request->csrfParam; ?>" value="<?php echo Yii::$app->request->csrfToken; ?>"/>

                        <div class="panel-body container-fluid">
                            <div class="row row-lg form-group">
                                <div class="col-sm-12 col-lg-12">
                                    <h5>Old Password</h5>
                                    <input name="old_password" type="password" class="form-control input-title" placeholder="Enter Your Old Password">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row row-lg form-group">
                                <div class="col-sm-12 col-lg-12">
                                    <h5>New Password</h5>
                                    <input name="new_password" id="password" type="password" class="form-control input-title" placeholder="Enter Your New Password">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row row-lg form-group">
                                <div class="col-sm-12 col-lg-12">
                                    <h5>Confirm Password</h5>
                                    <input name="confirm_password" type="password" class="form-control input-title" placeholder="Retype Your New Password">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-sm btn-primary btn-icon margin-bottom-20 margin-top-20 pull-right">
                                <i class="icon fa-save"></i> Change
                            </button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
            <?php if ($disclaimer != null) : ?>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">
                                <div class="col-sm-12 col-lg-12">
                                    <h5>Notes: (Disclaimer)</h5>

                                    <p><?php echo $disclaimer['value']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>