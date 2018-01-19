<?php

namespace common\models;

use Yii;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "CAT_AGEBS".
 *
 * @property int $ID
 * @property int $ENTIDAD_ID
 * @property int $MUNICIPIO_ID
 * @property int $LOC_ID
 * @property string $AGEB_ID
 * @property int $CVE_LOC_INEGI
 * @property string $CVE_AGEB_INEGI
 * @property string $LOC_DESC
 * @property string $DESCRI
 *
 * @property CATENTIDADFEDERATIVA $1
 */
class Agebs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_AGEBS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'ENTIDAD_ID', 'MUNICIPIO_ID', 'LOC_ID', 'CVE_LOC_INEGI'], 'integer'],
            [['AGEB_ID'], 'string', 'max' => 4],
            [['CVE_AGEB_INEGI'], 'string', 'max' => 5],
            [['LOC_DESC', 'DESCRI'], 'string', 'max' => 200],
            [['1'], 'exist', 'skipOnError' => true, 'targetClass' => CATENTIDADFEDERATIVA::className(), 'targetAttribute' => ['1' => 'CVE_ENTIDAD_FEDERATIVA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ENTIDAD_ID' => 'Entidad  ID',
            'MUNICIPIO_ID' => 'Municipio  ID',
            'LOC_ID' => 'Loc  ID',
            'AGEB_ID' => 'Ageb  ID',
            'CVE_LOC_INEGI' => 'Cve  Loc  Inegi',
            'CVE_AGEB_INEGI' => 'Cve  Ageb  Inegi',
            'LOC_DESC' => 'Loc  Desc',
            'DESCRI' => 'Descri',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function get1()
    {
        return $this->hasOne(CATENTIDADFEDERATIVA::className(), ['CVE_ENTIDAD_FEDERATIVA' => '1']);
    }


    public static function cacheAgebs($mun){
        $cacheName = 'AgebCache'.$mun;
        if (Yii::$app->cache->get($cacheName) === false) {
            $agebs = Agebs::find()
                ->select(['AGEB_ID'])
                ->where(['MUNICIPIO_ID' => $mun, 'ENTIDAD_ID' => 15])
                ->groupBy(['AGEB_ID'])
                ->orderBy(['AGEB_ID' => 'DESC'])
                ->all();
            Yii::$app->cache->set($cacheName, $agebs);
        }
        if(Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        } else {
            return new NotFoundHttpException();
        }
    }
}
