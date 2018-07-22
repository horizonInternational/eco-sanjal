<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property string $id
 * @property string $attribute
 * @property string $value
 * @property string $slug
 * @property string $icon
 * @property string $remark
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'slug', 'remark'], 'required'],
            [['value', 'remark'], 'string'],
            [['attribute', 'slug'], 'string', 'max' => 120],
            [['icon'], 'string', 'max' => 60],
            [['slug'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attribute' => 'Attribute',
            'value' => 'Value',
            'slug' => 'Slug',
            'icon' => 'Icon',
            'remark' => 'Remark',
        ];
    }
}
