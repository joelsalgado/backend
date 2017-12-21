<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_SITUACION_LABORAL".
 *
 * @property int $CVE_SITUACION_LABORAL
 * @property string $SITUACION_LABORAL
 * @property string $SEPUBLICA
 */
class SItuacionLaboral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_SITUACION_LABORAL';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_SITUACION_LABORAL'], 'required'],
            [['CVE_SITUACION_LABORAL'], 'integer'],
            [['SITUACION_LABORAL'], 'string', 'max' => 30],
            [['SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_SITUACION_LABORAL' => 'Cve  Situacion  Laboral',
            'SITUACION_LABORAL' => 'Situacion  Laboral',
            'SEPUBLICA' => 'Sepublica',
        ];
    }
}
