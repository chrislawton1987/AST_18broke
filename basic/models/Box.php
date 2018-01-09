<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetbox".
 *
 * @property integer $boxnoid
 * @property integer $boxnumber
 * @property integer $screenid
 */
class Box extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetbox';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['boxnumber', 'screenid'], 'required'],
            [['boxnumber', 'screenid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'boxnoid' => 'Boxnoid',
            'boxnumber' => 'Boxnumber',
            'screenid' => 'Screenid',
        ];
    }
}
