<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adminuser".
 *
 * @property integer $id
 * @property string $username
 * @property string $realname
 * @property string $email
 * @property integer $status
 * @property string $password_hash
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $access_token
 * @property integer $expire_at
 * @property integer $logged_at
 * @property integer $created_at
 * @property integer $updated_at
 */
class Adminuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adminuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'email', 'password_hash', 'auth_key'], 'required'],
            [['id', 'status', 'expire_at', 'logged_at', 'created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 32],
            [['realname', 'email', 'password_hash', 'auth_key', 'password_reset_token', 'access_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'realname' => '姓名',
            'email' => '电子邮箱',
            'status' => '状态',
            'password_hash' => '密码',
            'auth_key' => '授权key',
            'password_reset_token' => '密码重置token',
            'access_token' => '访问token',
            'expire_at' => '过期时间',
            'logged_at' => '登入时间',
            'created_at' => '创建时间',
            'updated_at' => '最后修改时间',
        ];
    }
}
