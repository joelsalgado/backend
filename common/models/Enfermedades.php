<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_ENFERMEDADES".
 *
 * @property int $CVE_ENFERMEDAD
 * @property string $DESC_ENFERMEDAD
 * @property string $STATUS_1
 */
class Enfermedades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_ENFERMEDADES';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_ENFERMEDAD'], 'required'],
            [['CVE_ENFERMEDAD'], 'integer'],
            [['DESC_ENFERMEDAD'], 'string', 'max' => 30],
            [['STATUS_1'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_ENFERMEDAD' => 'Cve  Enfermedad',
            'DESC_ENFERMEDAD' => 'Desc  Enfermedad',
            'STATUS_1' => 'Status 1',
        ];
    }

    public  static function cacheEnfermedad(){
        $cacheName = 'Enfermedad';
        if (Yii::$app->cache->get($cacheName) === false) {
            $enfermedad = Enfermedades::find()
                ->orderBy(['CVE_ENFERMEDAD' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName,$enfermedad);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return  Yii::$app->cache->get($cacheName);
        }
    }
}
