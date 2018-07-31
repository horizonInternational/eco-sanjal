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

    use common\components\HelperSettings as HSettings;
    use common\components\HelperUser as HUser;
    use common\components\Misc;
    use Yii;
    use yii\filters\VerbFilter;
    use yii\web\Controller;


    class AdminController extends Controller {

        protected $critical = array('superadmin', 'admin');

        protected $casual = array('superadmin', 'admin', 'operator');

        /**
         * @inheritdoc
         */
        public function behaviors() {
            return [
                'verbs' => [
                    'class'   => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
                    ],
                ],
            ];
        }

        /**
         * @inheritdoc
         */
        public function actions() {
            return [
                'error' => [
                    'class' => 'yii\web\ErrorAction',
                ],
            ];
        }

        public function beforeAction($action) {
            if ($action->id == 'error') {
                $this->layout = 'error';
            }

            if (!isset(Yii::$app->session[Yii::$app->params['user-session']])
                || !in_array(Yii::$app->params['role_user'][Yii::$app->session[Yii::$app->params['user-session']]->role], $this->critical)
            ) {
                return $this->redirect(Yii::$app->request->baseUrl . '/site/logout');
            }
            return parent::beforeAction($action);
        }

        public function actionIndex() {
            $user = Misc::exists(HUser::getUser('id', Yii::$app->session[Yii::$app->params['user-session']]->id), '');

            return $this->render('index', array(
                'user' => $user,
            ));
        }

        public function actionProfile() {
            $user = Misc::exists(HUser::getUser('id', Yii::$app->session[Yii::$app->params['user-session']]->id), '');
            return $this->render('profile', array('user' => $user));
        }

        public function actionEditProfile() {
            $user = Misc::exists(HUser::getUser('id', Yii::$app->session[Yii::$app->params['user-session']]->id), '');
            return $this->render('edit', array('user' => $user));
        }

        public function actionChangePassword() {
            $disclaimer = Misc::exists(HSettings::getSetting('slug', 'change-password-disclaimer'), '');
            return $this->render('change_password', array('disclaimer' => $disclaimer));
        }

        public function actionChangeProfilePicture() {
            $image = Misc::exists(HUser::getUser('id', Yii::$app->session[Yii::$app->params['user-session']]->id), '');
            return $this->render('change_profile_picture', array('image' => $image));
        }
    }
