<?php

    namespace backend\controllers;

    use common\models\LoginForm;
    use Yii;
    use yii\web\Controller;

    /**
     * Site controller
     */
    class SiteController extends Controller {

        public function behaviors() {
            return [];
        }

        public function beforeAction($action) {
            $this->layout = "login";
            if ($action->id == 'error') {
                $this->layout = 'error';
            }
            return parent::beforeAction($action);
        }

        public function actions() {
            return [
                'error' => [
                    'class' => 'yii\web\ErrorAction',
                ],
            ];
        }

        public function actionIndex() {
            if (!Yii::$app->user->isGuest && isset(Yii::$app->session[Yii::$app->params['user-session']])) {
                if (Yii::$app->session[Yii::$app->params['user-session']]->role == Yii::$app->params['user_role']['superadmin']
                    || Yii::$app->session[Yii::$app->params['user-session']]->role == Yii::$app->params['user_role']['admin']
                ) {
                    return $this->redirect(Yii::$app->request->baseUrl . '/admin');
                }
            }

            $model = new LoginForm();
            if (isset($_POST['LoginForm']) && $model->load(Yii::$app->request->post()) && $model->login()) {

                if (Yii::$app->session[Yii::$app->params['user-session']]->role == Yii::$app->params['user_role']['superadmin']
                    || Yii::$app->session[Yii::$app->params['user-session']]->role == Yii::$app->params['user_role']['admin']
                ) {
                    return $this->redirect(Yii::$app->request->baseUrl . '/admin');
                }
            }

            return $this->render('login', [
                'model' => $model,
            ]);
        }

        public function actionLogout() {
            Yii::$app->user->logout();
            $session = Yii::$app->session;
            $session->remove(Yii::$app->params['user-session']);
            return $this->redirect(Yii::$app->request->baseUrl . '/site');
        }
    }
