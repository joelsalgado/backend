<?php
namespace common\models;

use Yii;
use yii\base\Model;
use yii\base\InvalidParamException;
use common\models\User;
use common\helpers\EncodeData;

/**
 * Password reset form
 */
class ChangePasswordForm extends Model
{
    public $oldPassword;
    public $password;
    public $passwordRepeat;

    /**
     * @var \common\models\User
     */
    private $_user;


    /**
     * Creates a form model given a token.
     *
     * @param  string                          $token
     * @param  array                           $config name-value pairs that will be used to initialize the object properties
     * @throws \yii\base\InvalidParamException if token is empty or not valid
     */
   
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oldPassword', 'password', 'passwordRepeat'], 'required'],
            ['password', 'string', 'min' => 6],
            ['passwordRepeat', 'compare', 'compareAttribute'=>'password', 'message'=> 'las contraseñas no coinciden'],
        ];
    }

    public function validatePassword($model)
    {
        if (!Yii::$app->security->validatePassword($this->oldPassword, $model->password_hash)) {
            $this->addError('oldPassword', 'contraseña incorrecta');
        }
    }
    public function attributeLabels()
    {
        return [
            'password' => 'Contraseña',
            'passwordRepeat' => 'Confirmar contraseña',
            'oldPassword' => 'Contraseña anterior',
        ];
    }

    public function changePassword($model)
    {
        $this->validatePassword($model);
        
        if (!$this->hasErrors()) {
            return true;
        } else {
            return false;
        }
    }
}