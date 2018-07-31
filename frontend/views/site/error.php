<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$this->registerCssFile(Yii::$app->request->baseUrl . '/assets/css/plugins.min.css');
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/js/plugins.min.js');
$this->title = $name;
?>

        <?php $mid_err= Html::encode($this->title) ?>
        <?php $err_msg= nl2br(Html::encode($message)) ?>

        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-404">
                        <h1 class="pad-40 bg-color circle"><?php $mid_err?></h1>
                        <p><?php $err_msg?></p>
                        <form>
                            <div class="input-group input-group-lg">
                                <input type="text" placeholder="Search for Pages..." class="form-control" />
                                <span class="input-group-btn">
                                <button type="button" class="btn btn-default">
                                    <span class="input-group-btn">Search</span>
                                </button>
                            </span></div>
                        </form>

                        <p>Please try the following page.</p>
                        <a class="btn btn-sm btn-primary" href="<?php echo Yii::$app->request->baseUrl;?>" role="button">Home</a>
                        <a class="btn btn-sm btn-default" href="javascript: history.go(-1)" role="button">Go Back</a>


                        <div class="col-md-6">
                            <img src="<?php echo Yii::$app->request->baseUrl;?>/assets/images/gif-spanner.gif">
                        </div>
                    </div>
                </div>
            </div>
        </section>




