<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_REALIZA_ACTIVIDAD}}".
 *
 * @property int $CVE_REALIZA_ACTIVIDAD
 * @property string $DESC_REALIZA_ACTIVIDAD
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class RealizaActividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_REALIZA_ACTIVIDAD}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_REALIZA_ACTIVIDAD'], 'required'],
            [['CVE_REALIZA_ACTIVIDAD'], 'integer'],
            [['DESC_REALIZA_ACTIVIDAD'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_REALIZA_ACTIVIDAD' => 'Cve  Realiza  Actividad',
            'DESC_REALIZA_ACTIVIDAD' => 'Desc  Realiza  Actividad',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheRealizaAct(){
        $cacheName = 'RealizaActCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $ra = RealizaActividad::find()
                ->select(['CVE_REALIZA_ACTIVIDAD', 'DESC_REALIZA_ACTIVIDAD'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_REALIZA_ACTIVIDAD' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $ra);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
