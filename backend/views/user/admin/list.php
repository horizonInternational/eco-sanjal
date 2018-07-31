<?php
    /* @var $this yii\web\View */
    use common\components\Misc;
    if (Yii::$app->session[Yii::$app->params['user-session']]->role != Yii::$app->params['user_role']['admin']) {
        Misc::forceLogout();
    }
    $this->registerJsFile(Yii::$app->request->baseUrl . '/global/js/components/datatables.min.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/users.min.js');
    $this->registerJsFile(Yii::$app->request->baseUrl . '/assets/custom/user.js');
    $this->title = Yii::$app->params['system_name'] . ' | Administrators';

?>
<div class="page animsition">
    <div class="page-header  padding-bottom-0">
        <h1 class="page-title">Administrators</h1>

        <div class="page-header-actions">
            <a href="<?php echo Yii::$app->request->baseUrl; ?>/user/create-administrator" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip" data-original-title="Add New Product" data-placement="bottom">
                <i class="icon wb-plus" aria-hidden="true"></i> </a>
        </div>
    </div>
    <div class="page-content padding-30 container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="panel">
                    <div class="panel-body container-fluid">
                        <div class="row row-lg">
                            <div class="col-sm-12 col-lg-12 col-md-12">
                                <table class="table table-hover dataTable table-striped width-full with-export dtr-inline " id="user-table">
                                    <thead>
                                    <tr>
                                        <th width="27">#</th>
                                        <th width="72">Username</th>
                                        <th width="72">Name</th>
                                        <th width="127">Email</th>
                                        <th width="100">Phone</th>
                                        <th width="27">Mobile</th>
                                        <th width="12">Status</th>
                                        <th width="58"></th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th width="27">#</th>
                                        <th width="72">Username</th>
                                        <th width="72">Name</th>
                                        <th width="127">Email</th>
                                        <th width="100">Phone</th>
                                        <th width="27">Mobile</th>
                                        <th width="12">Status</th>
                                        <th width="58"></th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php if ($users != null) : $i = 0; ?>
                                        <?php foreach ($users as $user) : ?>
                                            <tr data-id="<?php echo $user['id']; ?>" data-role="administrator">
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $user['username']; ?></td>
                                                <td><?php echo $user['name']; ?></td>
                                                <td><?php echo $user['email']; ?></td>
                                                <td><?php echo $user['phone']; ?></td>
                                                <td><?php echo $user['mobile']; ?></td>
                                                <td class="user-status" id="<?php echo $user['status']; ?>">
                                                    <?php if ($user['status'] == 10): ?>
                                                        <span class="label label-success">Active</span>
                                                    <?php else : ?>
                                                        <span class="label label-danger">Inactive</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <div class="table-row-controls">
                                                        <!-- <a href="--><?php //echo Yii::$app->request->baseUrl . '/user/view-administrator/' . $user['username'];?><!--" class="block">-->
                                                        <!-- <i class="icon ti-user"></i>-->
                                                        <!-- </a>-->
                                                        <a href="<?php echo Yii::$app->request->baseUrl . '/user/update-administrator/' . $user['username']; ?>" class="edit-administrator block">
                                                            <i class="icon ti-pencil"></i> </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
