<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_CANTIDADES}}".
 *
 * @property int $CVE_CANT
 * @property string $DESC_CANT
 */
class Cantidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_CANTIDADES}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_CANT'], 'required'],
            [['CVE_CANT'], 'integer'],
            [['DESC_CANT'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_CANT' => 'Cve  Cant',
            'DESC_CANT' => 'Desc  Cant',
        ];
    }


    public static function cacheCantidades(){
        $cacheName = 'Cantidades';
        if (Yii::$app->cache->get($cacheName) === false) {
            $cantidades = Cantidades::find()
                ->orderBy(['CVE_CANT' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName,$cantidades);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return  Yii::$app->cache->get($cacheName);
        }
    }
}
