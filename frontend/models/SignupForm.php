<?php


namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $email;
    public $password;
    public $name;
    public $tel;
    public $role;
    public $qr_image;
    const ROLE_admin = 1;
    const ROLE_user = 0;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['name', 'required'],
            ['name', 'trim'],
            ['name', 'string', 'max' => 100],

            ['tel','required'],
            ['tel','trim'],
            ['tel','string','max'=>100],

            ['role', 'default', 'value' => '0'],
            ['role', 'in', 'range' => [self::ROLE_admin,self::ROLE_user]],

            ['qr_code','required'],
            ['qr_code','string','max'=>255]
        ];
    }

    /**
     * @return bool|null
     * @throws \yii\base\Exception
     */
    public function signup()
    {
        $user = new User();
        $user->username = $this->name;
        $user->email = $this->email;
        $user->tel = $this->tel;
        $user->role = $this->role;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generatePasswordResetToken();
        $user->qr_image= 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$this->name.'&choe=UTF-8';
        $user->avatar = 'uploads/user.png';
        $user->created_at = date('Y-m-d H:m:s');
        $user->status = $user::STATUS_ACTIVE;
        return $user->save();
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}