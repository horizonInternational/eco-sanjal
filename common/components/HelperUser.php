<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of User
     *
     * @author Chetan Rajbhandari
     */

    namespace common\components;

    use Yii;
    use yii\base\Component;
    use common\components\Query;
    use common\components\Misc;
    use common\models\User as User;

    class HelperUser extends Component {

        public static function addUser($data, $role) {
            $model = new User();
            $model->name = isset($data['name']) ? $data['name'] : '';
            $model->username = isset($data['username']) ? $data['username'] : '';
            $model->setPassword($data['password']);
            $model->role = Yii::$app->params['user_role'][$role];
            $model->email = isset($data['email']) ? $data['email'] : '';
            $model->phone = isset($data['phone']) ? $data['phone'] : 0;
            $model->mobile = isset($data['mobile']) ? $data['mobile'] : 0;
            //$model->profile_picture     = isset($data['profile_picture']) ? $data['profile_picture'] : '';
            $model->status = isset($data['status']) && $data['status'] == 1 ? 10 : 0;

            return $model->save() ? $model : FALSE;
        }

        public static function editUser($data, $id) {

            $model = User::findOne($id);

            $model->name = isset($data['name']) ? $data['name'] : '';
            $model->username = isset($data['username']) ? $data['username'] : '';
            if (!empty($data['password'])) {
                $model->setPassword($data['password']);
            }
            $model->email = isset($data['email']) ? $data['email'] : '';
            $model->phone = isset($data['phone']) ? $data['phone'] : 0;
            $model->mobile = isset($data['mobile']) ? $data['mobile'] : 0;
            return $model->save(false) ? $model : FALSE;
        }

        public static function editableUser($value, $id, $field) {
            $model = User::findOne($id);
            $model->$field = $value;
            return $model->save(false) ? $model : FALSE;
        }

        public static function getUser($field, $value) {
            $data = Query::queryOne("SELECT * FROM `user` WHERE `$field` = '$value'");
            return Misc::exists($data, FALSE);
        }

        public static function getName($field, $value) {
            $data = Query::queryOne("SELECT username FROM `user` WHERE `$field` = '$value'");
            return Misc::exists($data, FALSE);
        }

        public static function getUsers($fields = '') {
            $select = Misc::if_exists($fields) ? implode(', ', $fields) : '*';
            $data = Query::queryAll("SELECT $select FROM `user`");
            return Misc::exists($data, FALSE);
        }

        public static function getUsersByRole($fields = '', $role) {
            $select = Misc::if_exists($fields) ? implode(', ', $fields) : '*';
            $data = Query::queryAll("SELECT $select FROM `user` WHERE role = '$role'");
            return Misc::exists($data, FALSE);
        }

        public static function checkUser($value, $id, $field) {
            ($condition = $id > 0) ? " AND `id` != $id" : "";
            $data = Query::queryOne("SELECT * FROM `user` WHERE `$field` = '$value' $condition");
            return Misc::exists($data, FALSE);
        }

        public static function toggle($field, $id) {
            $model = User::findOne($id);
            $model->$field = ($model->$field == 0) ? 10 : 0;
            return $model->update() ? TRUE : FALSE;
        }

        public static function changePassword($data) {

            $model = User::findOne(Yii::$app->user->identity->id);
            $data = Misc::array_strip_tags($data);
            if (Misc::if_exists($data['old_password'])) {
                if ($model->validatePassword($data['old_password'])) {
                    if (Misc::if_exists($data['new_password']) && Misc::if_exists($data['confirm_password'])) {
                        if ($data['new_password'] == $data['confirm_password']) {
                            $model->setPassword($data['new_password']);
                            if ($model->update(false)) {
                                $return = 'ss';
                            }
                            else {
                                $return = 'ff';
                            }
                        }
                        else {
                            $return = 'mm';
                        }
                    }
                    else {
                        $return = 'mm';
                    }
                }
                else {
                    $return = 'icp';
                }
            }
            else {
                $return = 'icp';
            }
            return array('status' => $return);
        }
    }
