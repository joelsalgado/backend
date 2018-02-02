<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%MAP}}".
 *
 * @property double $CVE_ENT
 * @property string $CVE_MUN
 * @property string $NOM_MUN
 * @property double $POBTOT
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%MAP}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_ENT', 'POBTOT'], 'number'],
            [['CVE_MUN'], 'string', 'max' => 5],
            [['NOM_MUN'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_ENT' => 'Cve  Ent',
            'CVE_MUN' => 'Cve  Mun',
            'NOM_MUN' => 'Nom  Mun',
            'POBTOT' => 'Pobtot',
        ];
    }
}
