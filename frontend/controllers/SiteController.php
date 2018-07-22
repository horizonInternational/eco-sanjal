<?php
/*
 * @author Chetan Rajbhandari
 */

namespace frontend\controllers;

use common\components\HelperInventory;
use common\components\HelperSlots;
use common\models\LoginForm;
use common\models\User;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return ['error' => ['class' => 'yii\web\ErrorAction',], 'captcha' => ['class' => 'yii\captcha\CaptchaAction', 'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : NULL,],];
    }

    public function beforeAction($action)
    {
        if ($action->id == 'error') {
            $this->layout = 'error';
        }

        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

      public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

      public function actionFaq()
    {
        return $this->render('faq');
    }


    public function actionSearch()
    {
        return $this->render('search');
    }



    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Yii::$app->request->baseUrl . '/application');
            // return $this->goBack();
        } else {
            $user = User::findAnyByUsername($_POST['LoginForm']['username']);
            if ($user) {
                if ($user->incorrect_login > Yii::$app->params['allowed_incorrect_login']) {
                    Yii::$app->session->setFlash('login_error', "For some security reason, your account has been deactivaed. Please check your email for further information.");
                } else {
                    if ($user->status == 0) {
                        Yii::$app->session->setFlash('login_error', "Your account is inactive now. Please contact the admin for further information.");
                    } else {
                        Yii::$app->session->setFlash('login_error', "Incorrect username or password.");
                    }
                }

            } else {
                Yii::$app->session->setFlash('login_error', "Incorrect username or password.");
            }

            return $this->render('login', ['model' => $model,]);
        }
    }

    /**
     * Logs out the current user.
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(Yii::$app->request->baseUrl);
    }


    /**
     * Requests password reset.
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                echo json_encode(array('response' => 'Check your email for further instructions.'));
                die;
            } else {
                echo json_encode(array('response' => 'Sorry, we are unable to reset password for email provided.'));
                die;
            }
        }
        echo json_encode(array('response' => 'Sorry, this is not a registered email.'));
        die;
    }


}
