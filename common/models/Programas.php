<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_PROGRAMAS".
 *
 * @property int $CVE_PROGRAMA
 * @property string $CVE_DEPENDENCIA
 * @property string $PROGRAMA
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 * @property string $VIGENTE
 * @property int $ORDEN
 * @property string $TIPO
 * @property string $SEPUBLICA
 * @property string $OBERVACIONES
 * @property string $STATUS_1
 * @property string $PROGRAMA2
 * @property string $DESC_ABREVIADA
 *
 * @property LUDEPENDENCIAS $1
 */
class Programas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_PROGRAMAS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_PROGRAMA'], 'required'],
            [['CVE_PROGRAMA', 'ORDEN'], 'integer'],
            [['FECHA_INICIO', 'FECHA_FIN'], 'string'],
            [['CVE_DEPENDENCIA'], 'string', 'max' => 10],
            [['PROGRAMA', 'PROGRAMA2', 'DESC_ABREVIADA'], 'string', 'max' => 150],
            [['VIGENTE', 'TIPO', 'SEPUBLICA', 'STATUS_1'], 'string', 'max' => 1],
            [['OBERVACIONES'], 'string', 'max' => 100],
            [['1'], 'exist', 'skipOnError' => true, 'targetClass' => LUDEPENDENCIAS::className(), 'targetAttribute' => ['1' => 'DEPEN_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_PROGRAMA' => 'Cve  Programa',
            'CVE_DEPENDENCIA' => 'Cve  Dependencia',
            'PROGRAMA' => 'Programa',
            'FECHA_INICIO' => 'Fecha  Inicio',
            'FECHA_FIN' => 'Fecha  Fin',
            'VIGENTE' => 'Vigente',
            'ORDEN' => 'Orden',
            'TIPO' => 'Tipo',
            'SEPUBLICA' => 'Sepublica',
            'OBERVACIONES' => 'Obervaciones',
            'STATUS_1' => 'Status 1',
            'PROGRAMA2' => 'Programa2',
            'DESC_ABREVIADA' => 'Desc  Abreviada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function get1()
    {
        return $this->hasOne(LUDEPENDENCIAS::className(), ['DEPEN_ID' => '1']);
    }
}
