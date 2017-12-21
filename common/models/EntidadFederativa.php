<?php

namespace common\models;

use Yii;

class EntidadFederativa extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'CAT_ENTIDAD_FEDERATIVA';
    }

    public function rules()
    {
        return [
            [['CVE_ENTIDAD_FEDERATIVA'], 'required'],
            [['CVE_ENTIDAD_FEDERATIVA'], 'integer'],
            [['ENTIDAD_FEDERATIVA'], 'string', 'max' => 150],
            [['ABREVIACION_ENTIDAD'], 'string', 'max' => 2],
        ];
    }

    public function attributeLabels()
    {
        return [
            'CVE_ENTIDAD_FEDERATIVA' => 'Id',
            'ENTIDAD_FEDERATIVA' => 'Entidad  Federativa',
            'ABREVIACION_ENTIDAD' => 'Abreviacion de Entidad',
        ];
    }
}
