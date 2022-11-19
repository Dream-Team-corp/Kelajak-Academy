<?php

namespace frontend\models;

use common\models\OnlineApply;
use common\models\UseMember;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $name;
    public $surname;
    public $location;
    public $phone;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname'], 'trim'],
            [['name', 'surname', 'location', 'phone'], 'required', 'message' => "\"{attribute}\" maydonini to'ldirish shart!"],
            [['name', 'surname', 'location', 'phone'], 'string', 'min' => 2, 'max' => 255],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup($course_id, $teacher_id)
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new UseMember();

        $user->first_name = $this->name;
        $user->last_name = $this->surname;
        $user->tel_number = $this->phone;
        $user->type = $user::PUPIL;
        $user->status =  $user::STATUS_INACTIVE;

        if ($user->signUp()) {
            $info = OnlineApply::findOne(['user_id' => $user->id]);

            $info->location = $this->location;
            $info->course_id = $course_id;
            $info->teacher_id = $teacher_id;

            return $info->save();
        }
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Ism',
            'surname' => 'Familiya',
            'location' => 'Yashash joyi',
            'phone' => 'Telefon raqam'
        ];
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
