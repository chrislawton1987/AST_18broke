<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetscreens".
 *
 * @property integer $screenid
 * @property string $screenname
 * @property integer $stepid
 */
class Screens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetscreens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['screenname', 'stepid'], 'required'],
            [['stepid'], 'integer'],
            [['screenname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'screenid' => 'Screenid',
            'screenname' => 'Screenname',
            'stepid' => 'Stepid',
        ];
    }
}
