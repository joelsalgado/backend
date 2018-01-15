<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_TIPO_EMPLEO}}".
 *
 * @property int $CVE_TIPO_EMPLEO
 * @property string $DESC_TIPO_EMPLEO
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class TipoEmpleo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_TIPO_EMPLEO}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_TIPO_EMPLEO'], 'required'],
            [['CVE_TIPO_EMPLEO'], 'integer'],
            [['DESC_TIPO_EMPLEO'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_TIPO_EMPLEO' => 'Cve  Tipo  Empleo',
            'DESC_TIPO_EMPLEO' => 'Desc  Tipo  Empleo',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }
    public static function cacheEmpleo(){
        $cacheName = 'EmpleoCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $empleo = TipoEmpleo::find()
                ->select(['CVE_TIPO_EMPLEO', 'DESC_TIPO_EMPLEO'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_TIPO_EMPLEO' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $empleo);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
