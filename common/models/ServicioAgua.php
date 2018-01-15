<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_SERVICIO_AGUA}}".
 *
 * @property int $CVE_SERVICIO
 * @property string $DESC_SERVICIO
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class ServicioAgua extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_SERVICIO_AGUA}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_SERVICIO'], 'required'],
            [['CVE_SERVICIO'], 'integer'],
            [['DESC_SERVICIO'], 'string', 'max' => 60],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_SERVICIO' => 'Cve  Servicio',
            'DESC_SERVICIO' => 'Desc  Servicio',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheServicioAgua(){
        $cacheName = 'ServicioAguaCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $servag = ServicioAgua::find()
                ->select(['CVE_SERVICIO', 'DESC_SERVICIO'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_SERVICIO' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $servag);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
