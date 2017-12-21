<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "LU_ACTIVIDADES".
 *
 * @property int $ACTIVIDAD_ID
 * @property string $ACTIVIDAD_DESC
 * @property string $ACTIVIDAD_STATUS
 * @property int $PROCESO_ID
 * @property string $ACTIVIDAD_FECREG
 *
 * @property LUPROCESO $1
 */
class Actividades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'LU_ACTIVIDADES';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ACTIVIDAD_ID'], 'required'],
            [['ACTIVIDAD_ID', 'PROCESO_ID'], 'integer'],
            [['ACTIVIDAD_FECREG'], 'string'],
            [['ACTIVIDAD_DESC'], 'string', 'max' => 100],
            [['ACTIVIDAD_STATUS'], 'string', 'max' => 1],
            [['1'], 'exist', 'skipOnError' => true, 'targetClass' => LUPROCESO::className(), 'targetAttribute' => ['1' => 'PROCESO_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ACTIVIDAD_ID' => 'Actividad  ID',
            'ACTIVIDAD_DESC' => 'Actividad  Desc',
            'ACTIVIDAD_STATUS' => 'Actividad  Status',
            'PROCESO_ID' => 'Proceso  ID',
            'ACTIVIDAD_FECREG' => 'Actividad  Fecreg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getaProceso()
    {
        return $this->hasOne(LUPROCESO::className(), ['PROCESO_ID' => 'PROCESO_ID']);
    }
}
