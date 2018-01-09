<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetimages".
 *
 * @property integer $imageid
 * @property integer $imagepath
 * @property string $created
 * @property string $updated
 * @property string $deleted
 * @property integer $screenid
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetimages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imagepath', 'created', 'updated', 'deleted', 'screenid'], 'required'],
            [['imagepath', 'screenid'], 'integer'],
            [['created', 'updated', 'deleted'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'imageid' => 'Imageid',
            'imagepath' => 'Imagepath',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'screenid' => 'Screenid',
        ];
    }
}
