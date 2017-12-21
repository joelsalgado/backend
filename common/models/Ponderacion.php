<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "FURWEB_PONDERACION_150".
 *
 * @property int $N_PERIODO
 * @property double $CVE_PROGRAMA
 * @property double $FOLIO
 * @property string $FOLIO_RELACIONADO
 * @property double $P_01
 * @property double $P_02
 * @property double $P_03
 * @property double $P_04
 * @property double $P_05
 * @property double $P_06
 * @property double $P_07
 * @property double $P_08
 * @property double $P_09
 * @property double $P_10
 * @property double $P_11
 * @property double $P_12
 * @property double $P_13
 * @property double $P_14
 * @property double $P_15
 * @property double $P_16
 * @property double $P_17
 * @property double $P_18
 * @property double $P_19
 * @property int $P_20
 * @property int $P_21
 * @property int $P_22
 * @property int $P_23
 * @property int $P_24
 * @property int $P_25
 * @property string $FECHA_REG
 * @property string $IP
 * @property string $USU
 * @property string $PW
 * @property string $FECHA_M
 * @property string $IP_M
 * @property string $USU_M
 * @property string $PW_M
 */
class Ponderacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FURWEB_PONDERACION_150';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'P_20', 'P_21', 'P_22', 'P_23', 'P_24', 'P_25'], 'integer'],
            [['CVE_PROGRAMA', 'FOLIO', 'P_01', 'P_02', 'P_03', 'P_04', 'P_05', 'P_06', 'P_07', 'P_08', 'P_09', 'P_10', 'P_11', 'P_12', 'P_13', 'P_14', 'P_15', 'P_16', 'P_17', 'P_18', 'P_19'], 'number'],
            [['FOLIO'], 'required'],
            [['FECHA_REG', 'FECHA_M'], 'string'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['IP', 'USU', 'PW', 'IP_M', 'USU_M', 'PW_M'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'N_PERIODO' => 'N  Periodo',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'FOLIO' => 'Folio',
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'P_01' => 'P 01',
            'P_02' => 'P 02',
            'P_03' => 'P 03',
            'P_04' => 'P 04',
            'P_05' => 'P 05',
            'P_06' => 'P 06',
            'P_07' => 'P 07',
            'P_08' => 'P 08',
            'P_09' => 'P 09',
            'P_10' => 'P 10',
            'P_11' => 'P 11',
            'P_12' => 'P 12',
            'P_13' => 'P 13',
            'P_14' => 'P 14',
            'P_15' => 'P 15',
            'P_16' => 'P 16',
            'P_17' => 'P 17',
            'P_18' => 'P 18',
            'P_19' => 'P 19',
            'P_20' => 'P 20',
            'P_21' => 'P 21',
            'P_22' => 'P 22',
            'P_23' => 'P 23',
            'P_24' => 'P 24',
            'P_25' => 'P 25',
            'FECHA_REG' => 'Fecha  Reg',
            'IP' => 'Ip',
            'USU' => 'Usu',
            'PW' => 'Pw',
            'FECHA_M' => 'Fecha  M',
            'IP_M' => 'Ip  M',
            'USU_M' => 'Usu  M',
            'PW_M' => 'Pw  M',
        ];
    }
}
