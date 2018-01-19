<?php

namespace common\models;

use Yii;

class Secciones extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%CAT_SECCIONES}}';
    }

    public function rules()
    {
        return [
            [['CLAVE_DISTRITO', 'CLAVE_MUNICIPIO', 'SECCION', 'HOMBRES_PADRON', 'MUJERES_PADRON', 'TOTAL_PADRON', 'HOMBRES_LISTA_NOMINAL', 'MUJERES_LISTA_NOMINAL', 'TOTAL_LISTA_NOMINAL', 'DIFERENCIA', 'COBERTURA', 'CVE_MUNICIPIO'], 'number'],
            [['DISTRITO_NOMBRE', 'NOMBRE_MUNICIPIO'], 'string', 'max' => 60],
        ];
    }

    public function attributeLabels()
    {
        return [
            'CLAVE_DISTRITO' => 'Clave  Distrito',
            'DISTRITO_NOMBRE' => 'Distrito  Nombre',
            'CLAVE_MUNICIPIO' => 'Clave  Municipio',
            'NOMBRE_MUNICIPIO' => 'Nombre  Municipio',
            'SECCION' => 'Seccion',
            'HOMBRES_PADRON' => 'Hombres  Padron',
            'MUJERES_PADRON' => 'Mujeres  Padron',
            'TOTAL_PADRON' => 'Total  Padron',
            'HOMBRES_LISTA_NOMINAL' => 'Hombres  Lista  Nominal',
            'MUJERES_LISTA_NOMINAL' => 'Mujeres  Lista  Nominal',
            'TOTAL_LISTA_NOMINAL' => 'Total  Lista  Nominal',
            'DIFERENCIA' => 'Diferencia',
            'COBERTURA' => 'Cobertura',
            'CVE_MUNICIPIO' => 'Cve  Municipio',
        ];
    }

    public static function cacheSecciones($mun){
        $cacheName = 'SeccionesCache'.$mun;
        if (Yii::$app->cache->get($cacheName) === false) {
            $sec = Secciones::find()
                ->select(['CVE_MUNICIPIO', 'SECCION'])
                ->where(['CVE_MUNICIPIO' => $mun])
                ->orderBy(['SECCION' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $sec);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
