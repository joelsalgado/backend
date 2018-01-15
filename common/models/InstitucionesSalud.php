<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_INST_SALUD}}".
 *
 * @property int $CVE_INST_SALUD
 * @property string $DESC_INST_SALUD
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class InstitucionesSalud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_INST_SALUD}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_INST_SALUD'], 'required'],
            [['CVE_INST_SALUD'], 'integer'],
            [['DESC_INST_SALUD'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_INST_SALUD' => 'Cve  Inst  Salud',
            'DESC_INST_SALUD' => 'Desc  Inst  Salud',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheInstituciones(){
        $cacheName = 'InstitucionesCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $instituciones = InstitucionesSalud::find()
                ->select(['CVE_INST_SALUD', 'DESC_INST_SALUD'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_INST_SALUD' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $instituciones);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
