<?php
/* @var $this yii\web\View */
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/users.min.js');

$this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/magnific-popup/magnific-popup.min081a.css?v2.0.0');
$this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/lightbox/lightbox.min081a.css?v2.0.0');

$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/magnific-popup/jquery.magnific-popup.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/lightbox/lightbox.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/lightbox/magnific-popup.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/custom/user.js');
$this->title = Yii::$app->params['system_name'] . ' | Operator Profile';
?>
<div class="page animsition">
    <div class="page-header  padding-bottom-0">
        <h1 class="page-title"><?php echo !empty($user['name']) ? ucwords($user['name']) : ''; ?></h1>
        <div class="page-header-actions">

            <a href="javascript:history.go(-1)" class="btn btn-sm btn-icon btn-warning btn-round" data-toggle="tooltip" data-original-title="Go Back" data-placement="bottom">
                <i class="icon fa-arrow-left" aria-hidden="true"></i>
            </a>

            <a href="<?php echo Yii::$app->request->baseUrl; ?>/user/update-operator/<?php echo !empty($user['username']) ? $user['username'] : ''; ?>" type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip" data-original-title="Edit" data-placement="left">
                <i class="icon ti-pencil" aria-hidden="true"></i>
            </a>
            
        </div>
    </div>
    <div class="page-content padding-30 container-fluid">
        <div class="row">
            <div class=" col-sm-12 col-xlg-4 col-lg-4 col-md-6">
                <div class="widget widget-shadow">
                    <div class="widget-content text-center bg-white padding-40 user-description">
                        <div class="avatar avatar-100 margin-bottom-20">
                            <?php if (!empty($user['profile_picture'])) : ?>
                                <img src="<?php echo Yii::$app->params['upload_load_path']['profile'] . $user['profile_picture'];?>" alt="<?php echo $user['name'];?>">
                            <?php else : ?>
                                <img src="<?php echo Yii::$app->params['upload_load_path']['image'] . '../images/user-profile-pic.jpg';?>" alt="<?php echo $user['name'];?>">
                            <?php endif; ?>
                        </div>
                        <p class="font-size-20 blue-grey-700"><?php echo !empty($user['name']) ? ucwords($user['name']) : ''; ?></p>
                        <p class="font-size-20">
                        <?php if (!empty($user['status']) && $user['status'] == 10): ?>
                            <span class="label label-success">Active</span>
                        <?php else: ?>
                            <span class="label label-danger">Inactive</span>
                        <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xlg-8 col-lg-8 col-md-6">
                <div class="panel">
                    <div class="panel-body container-fluid">
                        <div class="row row-lg">
                            <div class="col-sm-12 col-lg-12 col-md-12">
                                <div class="widget widget-shadow">
                                    <div class="widget-content bg-white padding-20 user-address">
                                        <h3>Contact Information</h3>
                                        <ul>
                                            <li>
                                                <i class="icon fa-phone"></i>
                                                <a href="tel:<?php echo !empty($user['phone']) ? $user['phone'] : ''; ?>">
                                                    <?php echo !empty($user['phone']) ? $user['phone'] : ''; ?>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon fa-mobile-phone"></i>
                                                <a href="tel:<?php echo !empty($user['mobile']) ? $user['mobile'] : ''; ?>">                                    
                                                    <?php echo !empty($user['mobile']) ? $user['mobile'] : ''; ?>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon fa-envelope-o"></i>
                                                <a href="mailto:<?php echo !empty($user['email']) ? $user['email'] : ''; ?>">                                    
                                                    <?php echo !empty($user['email']) ? $user['email'] : ''; ?>
                                                </a>
                                            </li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
