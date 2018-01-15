<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_ACTIVIDAD_LABORAL}}".
 *
 * @property int $CVE_ACTIVIDAD_LABORAL
 * @property string $ACTIVIDAD_LABORAL
 * @property string $SEPUBLICA
 */
class ActividadLaboral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_ACTIVIDAD_LABORAL}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_ACTIVIDAD_LABORAL'], 'required'],
            [['CVE_ACTIVIDAD_LABORAL'], 'integer'],
            [['ACTIVIDAD_LABORAL'], 'string', 'max' => 40],
            [['SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_ACTIVIDAD_LABORAL' => 'Cve  Actividad  Laboral',
            'ACTIVIDAD_LABORAL' => 'Actividad  Laboral',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheAL(){
        $cacheName = 'ActLabCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $actlab = ActividadLaboral::find()
                ->select(['CVE_ACTIVIDAD_LABORAL', 'ACTIVIDAD_LABORAL'])
                ->where(['SEPUBLICA' => 'S'])
                ->orderBy(['CVE_ACTIVIDAD_LABORAL' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $actlab);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
