<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_MATERIAL_VIVIENDA}}".
 *
 * @property int $CVE_MATERIAL
 * @property string $DESC_MATERIAL
 */
class MaterialVivienda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_MATERIAL_VIVIENDA}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_MATERIAL'], 'required'],
            [['CVE_MATERIAL'], 'integer'],
            [['DESC_MATERIAL'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_MATERIAL' => 'Cve  Material',
            'DESC_MATERIAL' => 'Desc  Material',
        ];
    }

    public static function cacheMaterial(){
        $cacheName = 'MaterialCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $material = MaterialVivienda::find()
                ->orderBy(['CVE_MATERIAL' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $material);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
