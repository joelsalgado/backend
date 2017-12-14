<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_GRADO_ESTUDIO".
 *
 * @property int $CVE_GRADO_ESTUDIOS
 * @property string $GRADO_ESTUDIOS
 */
class GradoEstudio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_GRADO_ESTUDIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_GRADO_ESTUDIOS'], 'required'],
            [['CVE_GRADO_ESTUDIOS'], 'integer'],
            [['GRADO_ESTUDIOS'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_GRADO_ESTUDIOS' => 'Cve  Grado  Estudios',
            'GRADO_ESTUDIOS' => 'Grado  Estudios',
        ];
    }
}
