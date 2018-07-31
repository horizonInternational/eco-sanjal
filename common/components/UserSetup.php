<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of Email
     *
     * @author Chetan Rajbhandari
     */

    namespace common\components;

    use Yii;
    use yii\base\Component;
    use common\models\User;
    use common\models\Directory;

    class UserSetup extends Component {

        public static function setup($acc, $dir) {
            parse_str($acc, $account);
            parse_str($dir, $directory);

            if (isset($account) && !empty($account)) {
                $user = new User();
                $user->name = (isset($account['clientname']) && $account['clientname'] != '') ? $account['clientname'] : isset($account['username']) ? ucwords($account['username']) : 'Member';
                $user->username = isset($account['username']) ? $account['username'] : '';
                $user->setPassword($account['password']);
                $user->role = Yii::$app->params['user_role']['operator'];
                $user->email = isset($account['email']) ? $account['email'] : '';
                $user->email_verified = 1;

                $user->status = 10;
                if ($user->save(false)) {
                    $business = new Directory;
                    $business->package_id = (isset($directory['package']) && $directory['package'] != '') ? $directory['package'] : '';
                    $business->user_id = $user->id;
                    $business->name = (isset($directory['businessname']) && $directory['businessname'] != '') ? $directory['businessname'] : '';
                    $business->is_active = (isset($directory['status']) && $directory['status'] == '1') ? '1' : '0';
                    if ($business->save(false)) {
                        return TRUE;
                    }
                }
            }
            return FALSE;
        }

    }