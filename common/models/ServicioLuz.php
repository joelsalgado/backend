<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_SERVICIO_LUZ}}".
 *
 * @property int $CVE_SERVICIO_LUZ
 * @property string $DESC_SERVICIO_LUZ
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class ServicioLuz extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_SERVICIO_LUZ}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_SERVICIO_LUZ'], 'required'],
            [['CVE_SERVICIO_LUZ'], 'integer'],
            [['DESC_SERVICIO_LUZ'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_SERVICIO_LUZ' => 'Cve  Servicio  Luz',
            'DESC_SERVICIO_LUZ' => 'Desc  Servicio  Luz',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheServicioLuz(){
        $cacheName = 'ServicioLuzCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $serluz = ServicioLuz::find()
                ->select(['CVE_SERVICIO_LUZ', 'DESC_SERVICIO_LUZ'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_SERVICIO_LUZ' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $serluz);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
