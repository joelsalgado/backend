<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%CAT_DEPENDIENTES_ECONOM}}".
 *
 * @property int $CVE_DEPEN_ECONOM
 * @property string $DESC_DEPEN_ECONOM
 * @property string $STATUS_1
 * @property string $SEPUBLICA
 */
class DependientesEconomicos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%CAT_DEPENDIENTES_ECONOM}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CVE_DEPEN_ECONOM'], 'required'],
            [['CVE_DEPEN_ECONOM'], 'integer'],
            [['DESC_DEPEN_ECONOM'], 'string', 'max' => 30],
            [['STATUS_1', 'SEPUBLICA'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CVE_DEPEN_ECONOM' => 'Cve  Depen  Econom',
            'DESC_DEPEN_ECONOM' => 'Desc  Depen  Econom',
            'STATUS_1' => 'Status 1',
            'SEPUBLICA' => 'Sepublica',
        ];
    }

    public static function cacheDependientes(){
        $cacheName = 'DependientesCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $dep = DependientesEconomicos::find()
                ->select(['CVE_DEPEN_ECONOM', 'DESC_DEPEN_ECONOM'])
                ->where(['STATUS_1' => 'A'])
                ->orderBy(['CVE_DEPEN_ECONOM' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $dep);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
