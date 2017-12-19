<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "FURWEB_METADATO_STATUS_150".
 *
 * @property int $N_PERIODO
 * @property double $CVE_PROGRAMA
 * @property double $FOLIO
 * @property string $FOLIO_RELACIONADO
 * @property int $STATUS_P1_01
 * @property int $STATUS_P1_02
 * @property int $STATUS_P1_03
 * @property int $STATUS_P1_04
 * @property int $STATUS_P1_05
 * @property int $STATUS_P2_01
 * @property int $STATUS_P2_02
 * @property int $STATUS_P2_03
 * @property int $STATUS_P2_04
 * @property int $STATUS_P2_05
 * @property int $STATUS_P3_01
 * @property int $STATUS_P3_02
 * @property int $STATUS_P3_03
 * @property int $STATUS_P3_04
 * @property int $STATUS_P3_05
 * @property int $STATUS_P4_01
 * @property int $STATUS_P4_02
 * @property int $STATUS_P4_03
 * @property int $STATUS_P4_04
 * @property int $STATUS_P4_05
 * @property int $STATUS_P5_01
 * @property int $STATUS_P5_02
 * @property int $STATUS_P5_03
 * @property int $STATUS_P5_04
 * @property int $STATUS_P5_05
 * @property string $FECHA_REG
 * @property string $IP
 * @property string $USU
 * @property string $PW
 * @property string $FECHA_M
 * @property string $IP_M
 * @property string $USU_M
 * @property string $PW_M
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FURWEB_METADATO_STATUS_150';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'STATUS_P1_01', 'STATUS_P1_02', 'STATUS_P1_03', 'STATUS_P1_04', 'STATUS_P1_05', 'STATUS_P2_01', 'STATUS_P2_02', 'STATUS_P2_03', 'STATUS_P2_04', 'STATUS_P2_05', 'STATUS_P3_01', 'STATUS_P3_02', 'STATUS_P3_03', 'STATUS_P3_04', 'STATUS_P3_05', 'STATUS_P4_01', 'STATUS_P4_02', 'STATUS_P4_03', 'STATUS_P4_04', 'STATUS_P4_05', 'STATUS_P5_01', 'STATUS_P5_02', 'STATUS_P5_03', 'STATUS_P5_04', 'STATUS_P5_05'], 'integer'],
            [['CVE_PROGRAMA', 'FOLIO'], 'number'],
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
            'STATUS_P1_01' => 'Status  P1 01',
            'STATUS_P1_02' => 'Status  P1 02',
            'STATUS_P1_03' => 'Status  P1 03',
            'STATUS_P1_04' => 'Status  P1 04',
            'STATUS_P1_05' => 'Status  P1 05',
            'STATUS_P2_01' => 'Status  P2 01',
            'STATUS_P2_02' => 'Status  P2 02',
            'STATUS_P2_03' => 'Status  P2 03',
            'STATUS_P2_04' => 'Status  P2 04',
            'STATUS_P2_05' => 'Status  P2 05',
            'STATUS_P3_01' => 'Status  P3 01',
            'STATUS_P3_02' => 'Status  P3 02',
            'STATUS_P3_03' => 'Status  P3 03',
            'STATUS_P3_04' => 'Status  P3 04',
            'STATUS_P3_05' => 'Status  P3 05',
            'STATUS_P4_01' => 'Status  P4 01',
            'STATUS_P4_02' => 'Status  P4 02',
            'STATUS_P4_03' => 'Status  P4 03',
            'STATUS_P4_04' => 'Status  P4 04',
            'STATUS_P4_05' => 'Status  P4 05',
            'STATUS_P5_01' => 'Status  P5 01',
            'STATUS_P5_02' => 'Status  P5 02',
            'STATUS_P5_03' => 'Status  P5 03',
            'STATUS_P5_04' => 'Status  P5 04',
            'STATUS_P5_05' => 'Status  P5 05',
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
