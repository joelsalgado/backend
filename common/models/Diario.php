<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "FURWEB_DIARIO_150".
 *
 * @property double $N_PERIODO
 * @property double $CVE_PROGRAMA
 * @property int $FOLIO
 * @property double $PROCESO_ID
 * @property double $ACTIVIDAD_ID
 * @property double $TRX_ID
 * @property string $FOLIO_RELACIONADO
 * @property string $OBS
 * @property double $NO_VECES
 * @property string $FECHA_REG
 * @property string $IP
 * @property string $USU
 * @property string $FECHA_M
 * @property string $IP_M
 * @property string $USU_M
 */
class Diario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FURWEB_DIARIO_150';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA', 'PROCESO_ID', 'ACTIVIDAD_ID', 'TRX_ID', 'NO_VECES'], 'number'],
            [['FOLIO'], 'required'],
            [['FOLIO'], 'integer'],
            [['FECHA_REG', 'FECHA_M'], 'string'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['OBS'], 'string', 'max' => 500],
            [['IP', 'USU', 'IP_M', 'USU_M'], 'string', 'max' => 80],
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
            'PROCESO_ID' => 'Proceso  ID',
            'ACTIVIDAD_ID' => 'Actividad  ID',
            'TRX_ID' => 'Trx  ID',
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'OBS' => 'Obs',
            'NO_VECES' => 'No  Veces',
            'FECHA_REG' => 'Fecha  Reg',
            'IP' => 'Ip',
            'USU' => 'Usu',
            'FECHA_M' => 'Fecha  M',
            'IP_M' => 'Ip  M',
            'USU_M' => 'Usu  M',
        ];
    }
}
