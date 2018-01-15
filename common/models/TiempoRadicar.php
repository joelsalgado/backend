<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_TIEMPO_RADICAR}}".
 *
 * @property int $CVE_TIEMPO_RADICAR
 * @property string $DESC_TIEMPO_RADICAR
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class TiempoRadicar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_TIEMPO_RADICAR}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_TIEMPO_RADICAR'], 'required'],
            [['CVE_TIEMPO_RADICAR'], 'integer'],
            [['DESC_TIEMPO_RADICAR'], 'string', 'max' => 50],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_TIEMPO_RADICAR' => 'Cve  Tiempo  Radicar',
            'DESC_TIEMPO_RADICAR' => 'Desc  Tiempo  Radicar',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheRadicar(){
        $cacheName = 'Radicar';
        if (Yii::$app->cache->get($cacheName) === false) {
            $radicar = TiempoRadicar::find()
                ->orderBy(['CVE_TIEMPO_RADICAR' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName,$radicar);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return  Yii::$app->cache->get($cacheName);
        }
    }
}
