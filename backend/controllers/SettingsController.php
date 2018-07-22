<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of AdminController
     * @author Chetan Rajbhandari
     */

    namespace backend\controllers;

    use common\models\Messages;
    use Yii;
    use yii\filters\VerbFilter;
    use yii\web\Controller;

    class SettingsController extends Controller {

        protected $critical = array('superadmin', 'admin', 'operator');

        protected $casual = array('superadmin', 'admin', 'operator');

        /**
         * @inheritdoc
         */
        public function behaviors() {
            return ['verbs' => ['class' => VerbFilter::className(), 'actions' => ['logout' => ['post'],],],];
        }

        /**
         * @inheritdoc
         */
        public function actions() {
            return ['error' => ['class' => 'yii\web\ErrorAction',],];
        }

        public function beforeAction($action) {
            if ($action->id == 'error') {
                $this->layout = 'error';
            }

            if (!isset(Yii::$app->session[Yii::$app->params['user-session']]) || !in_array(Yii::$app->params['role_user'][Yii::$app->session[Yii::$app->params['user-session']]->role], $this->critical)) {
                return $this->redirect(Yii::$app->request->baseUrl . '/site/logout');
            }
            return parent::beforeAction($action);
        }

        public function actionIndex() {
            return $this->render('index');
        }


    }
