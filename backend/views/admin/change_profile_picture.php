<?php
    /* @var $this yii\web\View */
    use common\components\Misc;

    if (Yii::$app->session[Yii::$app->params['user-session']]->role != Yii::$app->params['user_role']['admin']) {
        Misc::forceLogout();
    }
    $this->title = Yii::$app->params['system_name'] . ' | Change Your Profile Picture';

    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.js');
    $this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.css');

    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/custom/admin.js');

    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/cropper/cropper.js');
    $this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/cropper/cropper.css');

    /* Required for file upload */
?>

<div class="page animsition">
    <div class="page-header  padding-bottom-0">
        <h1 class="page-title">Change Your Profile Picture</h1>

        <div class="page-header-actions">
            <a href="javascript:history.go(-1)" class="btn btn-sm btn-icon btn-warning btn-round" data-toggle="tooltip" data-original-title="Go Back" data-placement="bottom">
                <i class="icon fa-arrow-left" aria-hidden="true"></i> </a>
        </div>
    </div>
    <div class="page-content padding-30 container-fluid">
        <div class="row">
            <div class="col-md-4 profile-parent">
                <div class="panel">
                    <div class="panel-body container-fluid">
                        <div class="row row-lg">
                            <div class="col-sm-12 col-lg-12">
                                <?php if (!empty($image['profile_picture'])) : ?>
                                    <div class="featured-image-wrapper">
                                        <div class="delete-profile-picture" data-image="<?php echo $image['profile_picture']; ?>" data-toggle="tooltip" data-original-title="Remove Image" data-placement="left">
                                            <i class="icon fa-close pointer-cursor"></i>
                                        </div>
                                        <div class="cover">
                                            <img class="width-full profile-display" src="<?php echo Yii::$app->params['upload_load_path']['profile'] . $image['profile_picture']; ?>">
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <span class="label label-outline label-danger font-15">
                                    You have not uploaded your profile picture yet!
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel">
                    <input type="file" name="image_file" class="profile-picture-upload" accept="image/*" data-src="<?php echo Yii::$app->params['upload_load_path']['profile']; ?>">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-aside horizontal right modal-right-image-cropping" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Image Crop <span class="label label-primary pull-right">Crop the image</span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="cropper-image">
                            <img src="" alt="" style="width:100%; hieght:auto;">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right cancel-cropping" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary pull-right done-cropping" data-dismiss="modal" data-id="">Crop</button>
            </div>
        </div>
    </div>
</div>