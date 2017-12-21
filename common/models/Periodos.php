<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_PERIODOS".
 *
 * @property int $N_PERIODO
 * @property string $DESC_PERIODO
 */
class Periodos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_PERIODOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO'], 'required'],
            [['N_PERIODO'], 'integer'],
            [['DESC_PERIODO'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'N_PERIODO' => 'N  Periodo',
            'DESC_PERIODO' => 'Desc  Periodo',
        ];
    }
}
