<?php

namespace common\models;

use Yii;

class EstadoCivil extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'CAT_ESTADO_CIVIL';
    }

    public function rules()
    {
        return [
            [['CVE_ESTADO_CIVIL'], 'required'],
            [['CVE_ESTADO_CIVIL'], 'integer'],
            [['ESTADO_CIVIL'], 'string', 'max' => 40],
        ];
    }


    public function attributeLabels()
    {
        return [
            'CVE_ESTADO_CIVIL' => 'Cve  Estado  Civil',
            'ESTADO_CIVIL' => 'Estado  Civil',
        ];
    }
}
