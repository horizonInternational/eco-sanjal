<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */


    namespace common\components;

    use common\models\Blogs;
    use common\models\SliderImages;
    use Yii;
    use yii\base\Component;

    //use common\models\SliderImages;

    class HelperUpload extends Component {
        public static function upload($upload, $target_dir) {
            $filename = trim(strtolower(date('ymd') . time() . substr($upload['name'], -4, 4)));
            $target_file = $target_dir . basename($filename);
            $uploadOk = 1;
            $error = '';

            if (isset($_POST["submit"])) {
                $check = getimagesize($upload["tmp_name"]);
                if ($check !== FALSE) {
                    $error = "File is not an image.";
                    $uploadOk = 0;
                }
                else {
                    $error = "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $error = "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($upload["size"] > Yii::$app->params['image_size']) {
                $error = "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error

            if ($uploadOk == 0) {
                $type = 'error';
                $msg = 'Sorry, File Not Uploaded. Please Try again, Later.';
                Misc::setFlash($type, $msg);
                die;
                // if everything is ok, try to upload file
            }
            else {
                if (move_uploaded_file($upload["tmp_name"], $target_file)) {
                    return $filename;
                }
                else {
                    return FALSE;
                }
            }
            //die;
        }

        function reArrayFiles(&$file_post) {

            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

            for ($i = 0; $i < $file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }

            return $file_ary;
        }

        public static function deleteImage($image) {
            $path = Yii::$app->params['upload_path']['image'];
            $file = $path . $image;
            if (file_exists($file)) {
                if (unlink($file)) {
                    return TRUE;
                }
            }
            return FALSE;

        }

    }
