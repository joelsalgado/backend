<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_REGIONES_SEDESEM".
 *
 * @property int $REGIONID
 * @property string $REGIONNOMBRE
 * @property string $REGIONDESCRIPCION
 */
class Regiones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_REGIONES_SEDESEM';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REGIONID'], 'required'],
            [['REGIONID'], 'integer'],
            [['REGIONNOMBRE'], 'string', 'max' => 15],
            [['REGIONDESCRIPCION'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'REGIONID' => 'Regionid',
            'REGIONNOMBRE' => 'Regionnombre',
            'REGIONDESCRIPCION' => 'Regiondescripcion',
        ];
    }
}
