<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "FURWEB_EDOS_CTA_150".
 *
 * @property double $N_PERIODO
 * @property double $CVE_PROGRAMA
 * @property int $FOLIO
 * @property string $FOLIO_RELACIONADO
 * @property double $CARGO_M01
 * @property double $ABONO_M01
 * @property double $CARGO_M02
 * @property double $ABONO_M02
 * @property double $CARGO_M03
 * @property double $ABONO_M03
 * @property double $CARGO_M04
 * @property double $ABONO_M04
 * @property double $CARGO_M05
 * @property double $ABONO_M05
 * @property double $CARGO_M06
 * @property double $ABONO_M06
 * @property double $CARGO_M07
 * @property double $ABONO_M07
 * @property double $CARGO_M08
 * @property double $ABONO_M08
 * @property double $CARGO_M09
 * @property double $ABONO_M09
 * @property double $CARGO_M10
 * @property double $ABONO_M10
 * @property double $CARGO_M11
 * @property double $ABONO_M11
 * @property double $CARGO_M12
 * @property double $ABONO_M12
 * @property double $CARGO_C01
 * @property double $ABONO_C01
 * @property double $CARGO_C02
 * @property double $ABONO_C02
 * @property double $CARGO_C03
 * @property double $ABONO_C03
 * @property double $CARGO_C04
 * @property double $ABONO_C04
 * @property double $CARGO_C05
 * @property double $ABONO_C05
 * @property double $CARGO_C06
 * @property double $ABONO_C06
 * @property double $CARGO_C07
 * @property double $ABONO_C07
 * @property double $CARGO_C08
 * @property double $ABONO_C08
 * @property double $CARGO_C09
 * @property double $ABONO_C09
 * @property double $CARGO_C10
 * @property double $ABONO_C10
 * @property double $CARGO_C11
 * @property double $ABONO_C11
 * @property double $CARGO_C12
 * @property double $ABONO_C12
 * @property string $STATUS_1
 * @property string $STATUS_2
 * @property string $FECHA_REG
 * @property string $USU
 * @property string $PW
 * @property string $IP
 * @property string $FECHA_M
 * @property string $USU_M
 * @property string $PW_M
 * @property string $IP_M
 */
class Cuentas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FURWEB_EDOS_CTA_150';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA', 'CARGO_M01', 'ABONO_M01', 'CARGO_M02', 'ABONO_M02', 'CARGO_M03', 'ABONO_M03', 'CARGO_M04', 'ABONO_M04', 'CARGO_M05', 'ABONO_M05', 'CARGO_M06', 'ABONO_M06', 'CARGO_M07', 'ABONO_M07', 'CARGO_M08', 'ABONO_M08', 'CARGO_M09', 'ABONO_M09', 'CARGO_M10', 'ABONO_M10', 'CARGO_M11', 'ABONO_M11', 'CARGO_M12', 'ABONO_M12', 'CARGO_C01', 'ABONO_C01', 'CARGO_C02', 'ABONO_C02', 'CARGO_C03', 'ABONO_C03', 'CARGO_C04', 'ABONO_C04', 'CARGO_C05', 'ABONO_C05', 'CARGO_C06', 'ABONO_C06', 'CARGO_C07', 'ABONO_C07', 'CARGO_C08', 'ABONO_C08', 'CARGO_C09', 'ABONO_C09', 'CARGO_C10', 'ABONO_C10', 'CARGO_C11', 'ABONO_C11', 'CARGO_C12', 'ABONO_C12'], 'number'],
            [['FOLIO'], 'required'],
            [['FOLIO'], 'integer'],
            [['FECHA_REG', 'FECHA_M'], 'string'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['STATUS_1', 'STATUS_2'], 'string', 'max' => 1],
            [['USU', 'PW', 'IP', 'USU_M', 'PW_M', 'IP_M'], 'string', 'max' => 80],
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
            'CARGO_M01' => 'Cargo  M01',
            'ABONO_M01' => 'Abono  M01',
            'CARGO_M02' => 'Cargo  M02',
            'ABONO_M02' => 'Abono  M02',
            'CARGO_M03' => 'Cargo  M03',
            'ABONO_M03' => 'Abono  M03',
            'CARGO_M04' => 'Cargo  M04',
            'ABONO_M04' => 'Abono  M04',
            'CARGO_M05' => 'Cargo  M05',
            'ABONO_M05' => 'Abono  M05',
            'CARGO_M06' => 'Cargo  M06',
            'ABONO_M06' => 'Abono  M06',
            'CARGO_M07' => 'Cargo  M07',
            'ABONO_M07' => 'Abono  M07',
            'CARGO_M08' => 'Cargo  M08',
            'ABONO_M08' => 'Abono  M08',
            'CARGO_M09' => 'Cargo  M09',
            'ABONO_M09' => 'Abono  M09',
            'CARGO_M10' => 'Cargo  M10',
            'ABONO_M10' => 'Abono  M10',
            'CARGO_M11' => 'Cargo  M11',
            'ABONO_M11' => 'Abono  M11',
            'CARGO_M12' => 'Cargo  M12',
            'ABONO_M12' => 'Abono  M12',
            'CARGO_C01' => 'Cargo  C01',
            'ABONO_C01' => 'Abono  C01',
            'CARGO_C02' => 'Cargo  C02',
            'ABONO_C02' => 'Abono  C02',
            'CARGO_C03' => 'Cargo  C03',
            'ABONO_C03' => 'Abono  C03',
            'CARGO_C04' => 'Cargo  C04',
            'ABONO_C04' => 'Abono  C04',
            'CARGO_C05' => 'Cargo  C05',
            'ABONO_C05' => 'Abono  C05',
            'CARGO_C06' => 'Cargo  C06',
            'ABONO_C06' => 'Abono  C06',
            'CARGO_C07' => 'Cargo  C07',
            'ABONO_C07' => 'Abono  C07',
            'CARGO_C08' => 'Cargo  C08',
            'ABONO_C08' => 'Abono  C08',
            'CARGO_C09' => 'Cargo  C09',
            'ABONO_C09' => 'Abono  C09',
            'CARGO_C10' => 'Cargo  C10',
            'ABONO_C10' => 'Abono  C10',
            'CARGO_C11' => 'Cargo  C11',
            'ABONO_C11' => 'Abono  C11',
            'CARGO_C12' => 'Cargo  C12',
            'ABONO_C12' => 'Abono  C12',
            'STATUS_1' => 'Status 1',
            'STATUS_2' => 'Status 2',
            'FECHA_REG' => 'Fecha  Reg',
            'USU' => 'Usu',
            'PW' => 'Pw',
            'IP' => 'Ip',
            'FECHA_M' => 'Fecha  M',
            'USU_M' => 'Usu  M',
            'PW_M' => 'Pw  M',
            'IP_M' => 'Ip  M',
        ];
    }
}
