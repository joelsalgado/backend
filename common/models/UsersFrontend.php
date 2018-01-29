<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%users_frontend}}".
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $last_name2
 * @property int $program
 * @property int $period
 * @property string $birthday
 * @property string $user
 * @property string $password
 * @property string $email
 * @property int $status
 */
class UsersFrontend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users_frontend}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'last_name2', 'user', 'password', 'status', 'email' , 'birthday'], 'required', 'message' => 'Campo Obligatorio'],
            [['id', 'program', 'period', 'status'], 'integer', 'message' => 'Debe ser un numero entero'],
            [['birthday'], 'string'],
            [['birthday'],'date', 'format'=>'dd/mm/yyyy', 'message' => 'Formato no valido'],
            ['email','email', 'message' => 'Formato de correo incorrecto'],
            [['name', 'last_name', 'last_name2', 'email'], 'string', 'max' => 100],
            [['user', 'password'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'last_name' => 'Apellido Paterno',
            'last_name2' => 'Apellido Materno',
            'program' => 'Programa',
            'period' => 'Periodo',
            'birthday' => 'Fecha de Nacimiento',
            'user' => 'Usuario',
            'password' => 'Contraseña',
            'email' => 'Correo Electronico',
            'status' => 'Estado',
        ];
    }

    public function beforeSave($insert)
    {

        if (parent::beforeSave($insert)) {

            if ($this->isNewRecord) {
                $sql = "SELECT ".Yii::$app->params['sequenceUsersFrontent'].".NEXTVAL FROM DUAL";
                $result = Yii::$app->db->createCommand($sql)->queryOne();
                $this->id = $result["NEXTVAL"];
            }

            return true;
        }

    }
}
