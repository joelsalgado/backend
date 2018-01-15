<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_COMBUSTIBLES}}".
 *
 * @property int $CVE_COMBUSTIBLE
 * @property string $DESC_COMBUSTIBLE
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class Combustible extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_COMBUSTIBLES}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_COMBUSTIBLE'], 'required'],
            [['CVE_COMBUSTIBLE'], 'integer'],
            [['DESC_COMBUSTIBLE'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_COMBUSTIBLE' => 'Cve  Combustible',
            'DESC_COMBUSTIBLE' => 'Desc  Combustible',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheCombustible(){
        $cacheName = 'CombustibleCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $combustible = Combustible::find()
                ->select(['CVE_COMBUSTIBLE', 'DESC_COMBUSTIBLE'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_COMBUSTIBLE' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $combustible);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
