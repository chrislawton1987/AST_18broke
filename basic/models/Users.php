<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aetusers".
 *
 * @property integer $userid
 * @property string $username
 * @property string $fname
 * @property string $lname
 * @property string $password
 * @property string $created
 * @property string $updated
 * @property string $deleted
 * @property integer $roleentitykey
 * @property string $secretkey
 * @property integer $role
 * @property integer $authkey
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aetusers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'fname', 'lname', 'password', 'created', 'updated', 'roleentitykey', 'secretkey', 'authKey'], 'required'],
            [['created', 'updated', 'deleted'], 'safe'],
            [['roleentitykey', 'role'], 'integer'],
            [['username', 'fname', 'lname', 'password', 'secretkey', 'authKey'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'username' => 'Username',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'password' => 'Password',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'roleentitykey' => 'Roleentitykey',
            'secretkey' => 'Secretkey',
            'role' => 'Role',
            'authkey' => 'AuthKey',
        ];
    }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {

      return self::find()->where(['username' => $username])->one();

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->userid;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->role;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->role === $roley;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

}
