<?php
namespace frontend\models;

use Yii;
use common\models\User;
use yii\base\Model;
use yii\helpers\Html;
use common\components\Email;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
{
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
            ],
        ];
    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function sendEmailX()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if ($user) {
            if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save()) {
                return Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
                    ->setTo($this->email)
                    ->setSubject('Password reset for ' . Yii::$app->name)
                    ->send();
            }
        }

        return false;
    }

    public function sendEmail()
    {
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if ($user) {
            if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save()) {
                $msg = "Click this link ".Html::a('confirm', Yii::$app->request->baseUrl.'/verification/password/'.$user->username . '/' . $user->password_reset_token);

                return Email::sendTo($this->email, Yii::$app->name, 'Password reset for ' . Yii::$app->name, $msg);
                /*
                return Yii::$app->mail->compose()
                    ->setTo($this->email)
                    ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name . ' robot'])
                    ->setSubject('Password reset for ' . Yii::$app->name)
                    ->setTextBody("Click this link ".Html::a('confirm',
                        Yii::$app->request->baseUrl.'/verification/password/'.$user->username . '/' . $user->password_reset_token))
                    ->send();
                */
            }
        }

        return false;
    }
}
