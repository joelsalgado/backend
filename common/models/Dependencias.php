<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "LU_DEPENDENCIAS".
 *
 * @property string $DEPEN_ID
 * @property string $DEPEN_DESC
 * @property string $DEPEN_PADRE
 * @property string $DEPEN_HIJO
 * @property string $DEPEN_STATUS
 * @property string $ESTRUCGOB_ID
 * @property int $CLASIFICGOB_ID
 * @property string $DEPEN_FECREG
 * @property string $DEPEN_FECACT
 */
class Dependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'LU_DEPENDENCIAS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DEPEN_ID'], 'required'],
            [['CLASIFICGOB_ID'], 'integer'],
            [['DEPEN_FECREG', 'DEPEN_FECACT'], 'string'],
            [['DEPEN_ID'], 'string', 'max' => 11],
            [['DEPEN_DESC'], 'string', 'max' => 200],
            [['DEPEN_PADRE', 'DEPEN_HIJO', 'ESTRUCGOB_ID'], 'string', 'max' => 10],
            [['DEPEN_STATUS'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DEPEN_ID' => 'Depen  ID',
            'DEPEN_DESC' => 'Depen  Desc',
            'DEPEN_PADRE' => 'Depen  Padre',
            'DEPEN_HIJO' => 'Depen  Hijo',
            'DEPEN_STATUS' => 'Depen  Status',
            'ESTRUCGOB_ID' => 'Estrucgob  ID',
            'CLASIFICGOB_ID' => 'Clasificgob  ID',
            'DEPEN_FECREG' => 'Depen  Fecreg',
            'DEPEN_FECACT' => 'Depen  Fecact',
        ];
    }
}
