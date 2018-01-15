<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_ACTIVIDAD}}".
 *
 * @property int $CVE_ACTIVIDAD
 * @property string $DESC_ACTIVIDAD
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class Actividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_ACTIVIDAD}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_ACTIVIDAD'], 'required'],
            [['CVE_ACTIVIDAD'], 'integer'],
            [['DESC_ACTIVIDAD'], 'string', 'max' => 100],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_ACTIVIDAD' => 'Cve  Actividad',
            'DESC_ACTIVIDAD' => 'Desc  Actividad',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheActividad(){
        $cacheName = 'ActividadCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $actividad= Actividad::find()
                ->select(['CVE_ACTIVIDAD', 'DESC_ACTIVIDAD'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_ACTIVIDAD' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $actividad);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
