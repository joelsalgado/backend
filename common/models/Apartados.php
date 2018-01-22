<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%STATUS_NAV}}".
 *
 * @property int $FOLIO
 * @property int $N_PERIODO
 * @property int $CVE_PROGRAMA
 * @property string $FOLIO_RELACIONADO
 * @property int $APARTADO1
 * @property int $APARTADO2
 * @property int $APARTADO3
 * @property int $APARTADO4
 * @property int $APARTADO5
 * @property string $USU
 * @property string $IP
 */
class Apartados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%STATUS_NAV}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FOLIO'], 'required'],
            [['FOLIO', 'N_PERIODO', 'CVE_PROGRAMA', 'APARTADO1', 'APARTADO2', 'APARTADO3', 'APARTADO4', 'APARTADO5'], 'integer'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['USU', 'IP'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FOLIO' => 'Folio',
            'N_PERIODO' => 'N  Periodo',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'APARTADO1' => 'Apartado1',
            'APARTADO2' => 'Apartado2',
            'APARTADO3' => 'Apartado3',
            'APARTADO4' => 'Apartado4',
            'APARTADO5' => 'Apartado5',
            'USU' => 'Usu',
            'IP' => 'Ip',
        ];
    }
}
