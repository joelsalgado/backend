<?php

namespace common\models;

use Yii;

class Municipio extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'CAT_MUNICIPIO';
    }

    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'ENTIDADFEDERATIVAID', 'MUNICIPIOID', 'MUNICIPIOIDESPECIAL', 'MUNICIPIOESTATUS', 'REGIONID', 'MUNICIPIOID_SBIS', 'REGIONID_SBIS', 'REGIONID_GAB', 'COINCIDES_CANTPROG'], 'integer'],
            [['MUNICIPIONOMBRE'], 'string', 'max' => 60],
            [['1'], 'exist', 'skipOnError' => true, 'targetClass' => CATENTIDADFEDERATIVA::className(), 'targetAttribute' => ['1' => 'CVE_ENTIDAD_FEDERATIVA']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ENTIDADFEDERATIVAID' => 'Entidadfederativaid',
            'MUNICIPIOID' => 'Municipioid',
            'MUNICIPIOIDESPECIAL' => 'Municipioidespecial',
            'MUNICIPIONOMBRE' => 'Municipionombre',
            'MUNICIPIOESTATUS' => 'Municipioestatus',
            'REGIONID' => 'Regionid',
            'MUNICIPIOID_SBIS' => 'Municipioid  Sbis',
            'REGIONID_SBIS' => 'Regionid  Sbis',
            'REGIONID_GAB' => 'Regionid  Gab',
            'COINCIDES_CANTPROG' => 'Coincides  Cantprog',
        ];
    }

    public function get1()
    {
        return $this->hasOne(CATENTIDADFEDERATIVA::className(), ['CVE_ENTIDAD_FEDERATIVA' => '1']);
    }

    public static function edomex(){
        $cacheName = 'MunicipiosCsche';
        if (Yii::$app->cache->get($cacheName) === false) {
            $municipios = Municipio::find()
                ->select(['MUNICIPIOID', 'MUNICIPIONOMBRE'])
                ->where(['ENTIDADFEDERATIVAID' => 15])
                ->orderBy(['MUNICIPIONOMBRE' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $municipios);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}