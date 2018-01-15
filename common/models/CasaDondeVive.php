<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_CASADONDEVIVE_ES}}".
 *
 * @property int $CVE_CASADONDEVIVE_ES
 * @property string $DESC_CASADONDEVIVE_ES
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class CasaDondeVive extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_CASADONDEVIVE_ES}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_CASADONDEVIVE_ES'], 'required'],
            [['CVE_CASADONDEVIVE_ES'], 'integer'],
            [['DESC_CASADONDEVIVE_ES'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_CASADONDEVIVE_ES' => 'Cve  Casadondevive  Es',
            'DESC_CASADONDEVIVE_ES' => 'Desc  Casadondevive  Es',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheCasaDonde(){
        $cacheName = 'CasaDondeCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $cd = CasaDondeVive::find()
                ->select(['CVE_CASADONDEVIVE_ES', 'DESC_CASADONDEVIVE_ES'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_CASADONDEVIVE_ES' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $cd);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
