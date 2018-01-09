<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aettext".
 *
 * @property integer $textid
 * @property integer $textpath
 * @property string $created
 * @property string $updated
 * @property string $deleted
 * @property integer $boxnoid
 */
class Text extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aettext';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['textpath', 'created', 'updated', 'deleted', 'boxnoid'], 'required'],
            [['textpath', 'boxnoid'], 'integer'],
            [['created', 'updated', 'deleted'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'textid' => 'Textid',
            'textpath' => 'Textpath',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'boxnoid' => 'Boxnoid',
        ];
    }
}
