<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_LENGUAS".
 *
 * @property int $CVE_LENGUA
 * @property string $DESC_LENGUA
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class Lenguas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_LENGUAS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_LENGUA'], 'required'],
            [['CVE_LENGUA'], 'integer'],
            [['DESC_LENGUA', 'SEPUBLICA'], 'string', 'max' => 30],
            [['STATUS_1'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_LENGUA' => 'Cve  Lengua',
            'DESC_LENGUA' => 'Desc  Lengua',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheLengua(){
        $cacheName = 'Lengua';
        if (Yii::$app->cache->get($cacheName) === false) {
            $lengua = Lenguas::find()
                ->orderBy(['CVE_LENGUA' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName,$lengua);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return  Yii::$app->cache->get($cacheName);
        }
    }
}
