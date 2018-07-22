<?php

namespace common\models;

use Yii;
use common\models\User;
use yii\base\Model;
use yii\helpers\Html;
use common\components\Email;

/**
 * Login form
 */
class LoginForm extends Model {

    public $username;
    public $password;
    public $rememberMe = true;
    private $_user;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params) {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {

                $Xuser = User::findAnyByUsername($this->username);
                if ($Xuser != null) {
                    $Xuser->incorrect_login = $Xuser->incorrect_login + 1;
                    
                    if ($Xuser->incorrect_login > Yii::$app->params['allowed_incorrect_login']) {
                        $Xuser->status = 0;
                        $this->sendEmail();
                    }
                    $Xuser->update();
                }
                $this->addError($attribute, 'Incorrect username or password.');
            }
            else {
                if ($user) {
                    $user->incorrect_login = 0;
                    $user->update();
                }
            } 
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login() {

        if ($this->validate()) {
            $user = $this->getUser();
            Yii::$app->session->set(Yii::$app->params['user-session'], $user);
            return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);
        } 
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser() {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function sendEmail()
    {
        $Xuser = User::findAnyByUsername($this->username);

        if ($Xuser) {
            if (!User::isPasswordResetTokenValid($Xuser->password_reset_token)) {
                $Xuser->generatePasswordResetToken();
                $Xuser->status = 0;
            }

            if ($Xuser->save()) {
                $msg = "Your account have been deactivated due to multiple incorrect login attempts. Please click on the following and change your password inorder to activate your account. Click this link ".Html::a('confirm',
                        Yii::$app->request->baseUrl.'/verification/password/'.$Xuser->username . '/' . $Xuser->password_reset_token);
                
                return Email::sendTo($Xuser->email, Yii::$app->name, 'Account deactivated for ' . Yii::$app->name, $msg);
            }
        }

        return false;
    }

}
