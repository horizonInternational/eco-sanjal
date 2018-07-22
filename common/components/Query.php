<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of query command functions
 *
 * @author Chetan Rajbhandari
 */

namespace common\components;

 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Query extends Component {

    public static function execute($sql)
    {
        return Yii::$app->db->createCommand($sql)->execute();
    }

	public static function queryAll($sql)
    {
    	return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function queryOne($sql)
    {
    	return Yii::$app->db->createCommand($sql)->queryOne();
    }

    public static function queryColumn($sql)
    {
    	return Yii::$app->db->createCommand($sql)->queryColumn();
    }

    public static function queryScalar($sql)
    {
    	return Yii::$app->db->createCommand($sql)->queryScalar();
    }

    public static function batchInsert($table, $fields, $values)
    {
        return Yii::$app->db->createCommand()->batchInsert($table, $fields, $values)->execute();
    } 
}
