<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_LABORAL".
 *
 * @property int $CVE_ACTIVIDAD_LABORAL
 * @property string $ACTIVIDAD_LABORAL
 * @property string $SEPUBLICA
 */
class Laboral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_LABORAL';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_ACTIVIDAD_LABORAL'], 'required'],
            [['CVE_ACTIVIDAD_LABORAL'], 'integer'],
            [['ACTIVIDAD_LABORAL'], 'string', 'max' => 20],
            [['SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_ACTIVIDAD_LABORAL' => 'Cve  Actividad  Laboral',
            'ACTIVIDAD_LABORAL' => 'Actividad  Laboral',
            'SEPUBLICA' => 'Sepublica',
        ];
    }
}
