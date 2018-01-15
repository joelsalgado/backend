<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_ORFANDAD}}".
 *
 * @property int $CVE_ORFANDAD
 * @property string $DESC_ORFANDAD
 * @property string $STATUS_1
 */
class Orfandad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_ORFANDAD}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_ORFANDAD'], 'required'],
            [['CVE_ORFANDAD'], 'integer'],
            [['DESC_ORFANDAD'], 'string', 'max' => 50],
            [['STATUS_1'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_ORFANDAD' => 'Cve  Orfandad',
            'DESC_ORFANDAD' => 'Desc  Orfandad',
            'STATUS_1' => 'Status 1',
        ];
    }

    public static function cacheOrfandad(){
        $cacheName = 'OrfandadCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $orfandad = Orfandad::find()
                ->select(['CVE_ORFANDAD', 'DESC_ORFANDAD'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_ORFANDAD' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $orfandad);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
