<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_PER_INGRESOS}}".
 *
 * @property int $CVE_PER_INGRESO
 * @property string $DESC_PER_INGRESO
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class PerIngresos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_PER_INGRESOS}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_PER_INGRESO'], 'required'],
            [['CVE_PER_INGRESO'], 'integer'],
            [['DESC_PER_INGRESO'], 'string', 'max' => 20],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_PER_INGRESO' => 'Cve  Per  Ingreso',
            'DESC_PER_INGRESO' => 'Desc  Per  Ingreso',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cachePerIngresos(){
        $cacheName = 'PerIngresossche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $pi = PerIngresos::find()
                ->select(['CVE_PER_INGRESO', 'DESC_PER_INGRESO'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_PER_INGRESO' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $pi);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
