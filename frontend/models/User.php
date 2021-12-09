<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 * @property string|null $password_reset_token
 * @property string $name
 * @property string $email
 * @property string|null $tel
 * @property int|null $role 0: user, 1: admin
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $status 0: inactive, 1: active
 * @property string $qr_image
 * @property string $avatar
 * @property string|null $banner
 * @property string|null $note
 * @property string|null $verification_token
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'email', 'qr_image', 'avatar'], 'required'],
            [['role', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['qr_image'], 'string'],
            [['username', 'password', 'password_reset_token', 'name', 'email', 'avatar', 'banner', 'note', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['tel'], 'string', 'max' => 12],
            [['username'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'name' => 'Name',
            'email' => 'Email',
            'tel' => 'Tel',
            'role' => 'Role',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'qr_image' => 'Qr Image',
            'avatar' => 'Avatar',
            'banner' => 'Banner',
            'note' => 'Note',
            'verification_token' => 'Verification Token',
        ];
    }
}
