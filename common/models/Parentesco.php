<?php

namespace common\models;

use Yii;

class Parentesco extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'CAT_PARENTESCO';
    }


    public function rules()
    {
        return [
            [['CVE_PARENTESCO'], 'required'],
            [['CVE_PARENTESCO'], 'integer'],
            [['DESC_PARENTESCO'], 'string', 'max' => 20],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    public function attributeLabels()
    {
        return [
            'CVE_PARENTESCO' => 'Cve  Parentesco',
            'DESC_PARENTESCO' => 'Desc  Parentesco',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheParentesco(){
        $cacheName = 'Parentesco';
        if (Yii::$app->cache->get($cacheName) === false) {
            $parentesco = Parentesco::find()
                ->orderBy(['CVE_PARENTESCO' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName,$parentesco);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return  Yii::$app->cache->get($cacheName);
        }
    }
}
