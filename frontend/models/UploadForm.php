<?php

namespace frontend\models;
use common\models\User;
use yii\base\Model;
use yii\imagine\Image;
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
 * @property string|null $avatar
 * @property string|null $banner
 * @property string|null $note
 * @property string|null $verification_token
 */
class UploadForm extends Model
{

    public $avatar;
    public function rules()
    {
        return [
            [['avatar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->avatar->saveAs('uploads/' . $this->avatar->baseName . '.' . $this->avatar->extension);
            return true;
        } else {
            return false;
        }
    }
}
