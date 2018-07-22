<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of User
     * @author Chetan Rajbhandari
     */

    namespace common\components;

    use yii\base\Component;

    class HelperSettings extends Component {
        public static function get() {
            $data = Query::queryAll("SELECT * FROM `settings` AS S ORDER BY S.id ASC");
            return Misc::exists($data, FALSE);
        }

        public static function getAll() {
            $data = Query::queryAll("SELECT * FROM `settings` AS S ORDER BY S.id ASC");
            $settings = [];
            foreach ($data as $d) {
                $settings[$d['slug']] = $d;
            }
            return Misc::exists($settings, FALSE);
        }

        public static function getWhere($condition) {
            $data = Query::queryAll("SELECT * FROM `settings` WHERE $condition");
            return Misc::exists($data, FALSE);
        }

        public static function set($option, $value) {
            return;
        }
    }
