<?php

namespace common\models;

use Yii;
use yii\web\NotFoundHttpException;

class Nacionalidades extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'CAT_NACIONALIDADES';
    }

    public function rules()
    {
        return [
            [['CVE_NACIONALIDAD'], 'required'],
            [['CVE_NACIONALIDAD'], 'integer'],
            [['DESC_NACIONALIDAD'], 'string', 'max' => 50],
            [['NOMBRE_COMUN', 'NOMBRE_OFICIAL'], 'string', 'max' => 60],
        ];
    }

    public function attributeLabels()
    {
        return [
            'CVE_NACIONALIDAD' => 'Cve  Nacionalidad',
            'DESC_NACIONALIDAD' => 'Desc  Nacionalidad',
            'NOMBRE_COMUN' => 'Nombre  Comun',
            'NOMBRE_OFICIAL' => 'Nombre  Oficial',
        ];
    }

    public static function cacheNacionalidades(){
        $cacheName = 'NationalitiesCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $nation = Nacionalidades::find()
                ->select(['CVE_NACIONALIDAD', 'DESC_NACIONALIDAD'])
                ->orderBy(['CVE_NACIONALIDAD' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $nation);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
