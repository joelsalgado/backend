<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "LU_PROCESO".
 *
 * @property int $PROCESO_ID
 * @property string $PROCESO_DESC
 * @property string $PROCESO_STATUS
 * @property string $PROCESO_FECREG
 *
 * @property LUACTIVIDADES[] $lUACTIVIDADESs
 */
class Proceso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'LU_PROCESO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROCESO_ID'], 'required'],
            [['PROCESO_ID'], 'integer'],
            [['PROCESO_FECREG'], 'string'],
            [['PROCESO_DESC'], 'string', 'max' => 100],
            [['PROCESO_STATUS'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PROCESO_ID' => 'Proceso  ID',
            'PROCESO_DESC' => 'Proceso  Desc',
            'PROCESO_STATUS' => 'Proceso  Status',
            'PROCESO_FECREG' => 'Proceso  Fecreg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLUACTIVIDADESs()
    {
        return $this->hasMany(LUACTIVIDADES::className(), ['1' => 'PROCESO_ID']);
    }
}
