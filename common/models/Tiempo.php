<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_TIEMPO}}".
 *
 * @property int $CVE_TIEMPO
 * @property string $DESC_TIEMPO
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class Tiempo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_TIEMPO}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_TIEMPO'], 'required'],
            [['CVE_TIEMPO'], 'integer'],
            [['DESC_TIEMPO'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_TIEMPO' => 'Cve  Tiempo',
            'DESC_TIEMPO' => 'Desc  Tiempo',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheTiempo(){
        $cacheName = 'TiempoCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $tiempo = Tiempo::find()
                ->select(['CVE_TIEMPO', 'DESC_TIEMPO'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_TIEMPO' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $tiempo);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
