<?php
/* @var $this yii\web\View */

$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/users.min.js');

/* Required for Switches */
$this->registerJsFile(Yii::$app->request->baseUrl . '/global/vendor/switchery/switchery.min.js');
$this->registerJsFile(Yii::$app->request->baseUrl . '/global/js/components/switchery.min.js');

$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.js');
$this->registerCssFile(Yii::$app->request->baseUrl . '/assets/js/fileinput/fileinput.css');
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/custom/user.js');
$this->title = Yii::$app->params['system_name'] . ' | Create New Operator';
?>
<div class="page animsition">
    <form action="<?php echo Yii::$app->request->baseUrl;?>/user/add-operator" name="newOperator" data-tablename="users" data-action="create-operator" method="post" class="form-horizontal operator users" enctype="multipart/form-data">
        <input type="hidden" name="<?php echo Yii::$app->request->csrfParam; ?>" value="<?php echo Yii::$app->request->csrfToken; ?>" />
        <input type="hidden" name="id" value="0" id="edit-id" />
        <div class="page-header  padding-bottom-0">
            <h1 class="page-title">Create Operator</h1>
            <div class="page-header-actions">

                <a href="javascript:history.go(-1)" class="btn btn-sm btn-icon btn-warning btn-round" data-toggle="tooltip" data-original-title="Go Back" data-placement="bottom">
                    <i class="icon fa-arrow-left" aria-hidden="true"></i>
                </a>

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
                                <label class="label-control">Name</label>
                                <input type="text" name="name" class="form-control input-title required"  placeholder="Enter Name" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <label class="label-control">Email</label>
                                <input name="email" type="text" class="form-control input-title required email"  placeholder="Enter Email" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Telephone</h5>
                                <input name="phone" type="number" class="form-control input-number"  placeholder="Enter Phone" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <div class="panel">
                        <div class="panel-body container-fluid">
                            <div class="form-group">
                                <h5>Mobile</h5>
                                <input name="mobile" type="number" class="form-control input-number"  placeholder="Enter Mobile" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <div class="panel padding-top-40">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login Detail</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control input-title required"  placeholder="Enter Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-title required password"  placeholder="Enter Password" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" class="form-control input-title required password_again"  placeholder="Retype Password" value="">
                                    </div>
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
                                            <input type="checkbox" class="" name="status" data-plugin="switchery" data-color="#62a8ea" value="1" checked />
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