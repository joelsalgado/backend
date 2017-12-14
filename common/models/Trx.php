<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "LU_TRX".
 *
 * @property int $TRX_ID
 * @property string $TRX_DESC
 * @property string $TRX_STATUS
 * @property string $TRX_FECREG
 */
class Trx extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'LU_TRX';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TRX_ID'], 'required'],
            [['TRX_ID'], 'integer'],
            [['TRX_FECREG'], 'string'],
            [['TRX_DESC'], 'string', 'max' => 100],
            [['TRX_STATUS'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TRX_ID' => 'Trx  ID',
            'TRX_DESC' => 'Trx  Desc',
            'TRX_STATUS' => 'Trx  Status',
            'TRX_FECREG' => 'Trx  Fecreg',
        ];
    }
}
