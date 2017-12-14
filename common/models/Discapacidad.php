<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_DISCAPACIDAD".
 *
 * @property int $CVE_DISCAPACIDAD
 * @property string $DESC_DISCAPACIDAD
 * @property string $STATUS_1
 */
class Discapacidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_DISCAPACIDAD';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_DISCAPACIDAD'], 'required'],
            [['CVE_DISCAPACIDAD'], 'integer'],
            [['DESC_DISCAPACIDAD'], 'string', 'max' => 30],
            [['STATUS_1'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_DISCAPACIDAD' => 'Cve  Discapacidad',
            'DESC_DISCAPACIDAD' => 'Desc  Discapacidad',
            'STATUS_1' => 'Status 1',
        ];
    }
}
