<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model {

    public $email;
    public $firma;
    public $phone;
    public $warenwirtschaft;
    public $amazon;
    public $farfetch;
    public $onlineshop;
    public $dhl;
    public $dbd;
    public $blackPost;
    public $datenanreicherung;
    public $amazonProduktupload;
    public $eingestellte;
    public $angebundene;
    public $checkWarenwirtschaft = false;
    public $checkAmazon = false;
    public $checkFarfetch = false;
    public $checkonlineshop = false;
    public $checkamazonProduktupload = false;
    public $checkDatenAnreicherung = false;
    public $checkangebundene = false;
    public $checkeingestellte = false;
    public $checkDhl = false;
    public $checkblackPost = false;
    public $checkDbd = false;
    public $checkActive = false;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            ['verifyCode', 'captcha'],
            [['firma', 'email', 'password', 'menge', 'warenwirtschaft', 'amazon', 'farfetch', 'datenanreicherung', 'phone', 'email', 'company',
            'dhl', 'dbd', 'blackPost', 'amazonProduktupload', 'eingestellte', 'angebundene', 'onlineshop'], 'string'],
            ['checkWarenwirtschaft', 'boolean'], ['checkAmazon', 'boolean'], ['checkFarfetch', 'boolean'], ['checkonlineshop', 'boolean'], ['checkblackPost', 'boolean'],
            ['checkDhl', 'boolean'], ['checkDbd', 'boolean'], ['checkblackPost', 'boolean'],
            ['checkamazonProduktupload', 'boolean'], ['checkDatenAnreicherung', 'boolean'],
            ['checkangebundene', 'boolean'], ['checkeingestellte', 'boolean'], ['checkActive', 'boolean'],
            ['email', 'email'], ['phone', 'integer', 'integerOnly' => false],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email) {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                    ->setTo($email)
                    ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                    ->setReplyTo([$this->email => $this->name])
                    ->setSubject($this->subject)
                    ->setTextBody($this->body)
                    ->send();

            return true;
        }
        return false;
    }

    public function sendEmail($model) {
        Yii::$app->mailer->compose()
                ->setFrom('system@cloudstock.io')
                ->setTo('khaled@cloudstock.io')
                ->setSubject('Neues Einkauf')
                ->setTextBody('Plain text content')
                ->setHtmlBody('Hallo Jemand hat bei uns gekauft seine Email ist :' . $model->email . ', sein Phone ist :' . $model->phone . 'und seine Name ist :' . $model->firma)->send();
    }

}
