<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_SERVICIO_SANDREN}}".
 *
 * @property int $CVE_SERVICIO_SANDREN
 * @property string $DESC_SERVICIO_SANDREN
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class Sandren extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_SERVICIO_SANDREN}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_SERVICIO_SANDREN'], 'required'],
            [['CVE_SERVICIO_SANDREN'], 'integer'],
            [['DESC_SERVICIO_SANDREN'], 'string', 'max' => 50],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_SERVICIO_SANDREN' => 'Cve  Servicio  Sandren',
            'DESC_SERVICIO_SANDREN' => 'Desc  Servicio  Sandren',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheSandren(){
        $cacheName = 'SandrenCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $sandren = Sandren::find()
                ->select(['CVE_SERVICIO_SANDREN', 'DESC_SERVICIO_SANDREN'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_SERVICIO_SANDREN' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $sandren);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
