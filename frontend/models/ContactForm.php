<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $rating;
    public $reCaptcha;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body','rating'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['rating', 'integer', 'min'=>0, 'max'=>10],
            [
                ['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator2::class,
                'secret' => '6Lez8qkiAAAAADheVglZC8kgMbYpJJigYS5GX7gM',
                'uncheckedMessage' => 'Iltimos robot emasligingizni tasdiqlang!'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    public function save() {
        $contact = new Contact();
        $contact->username = $this->name;
        $contact->email = $this->email;
        $contact->title = $this->subject;
        $contact->body = $this->body;
        $contact->status = 0;
        $contact->rating = $this->rating;
        if ($contact->save()) {
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
?>