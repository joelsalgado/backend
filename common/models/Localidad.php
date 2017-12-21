<?php

namespace common\models;

use Yii;


class Localidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_LOCALIDAD';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'CVE_ENTIDAD_FEDERATIVA', 'CVE_MUNICIPIO', 'CVE_LOCALIDAD', 'ZONA_ID', 'REGION_ID'], 'integer'],
            [['LOC_LATITUD', 'LOC_LONGITUD', 'LOC_LATDEC', 'LOC_LONGDEC', 'LOC_ALTITUD'], 'number'],
            [['NUMINEGI_ID', 'CARTA_ID', 'PFEM', 'VTOT'], 'string', 'max' => 6],
            [['DESC_LOCALIDAD', 'DESCRI'], 'string', 'max' => 150],
            [['LOC_TIPO'], 'string', 'max' => 100],
            [['PTOT', 'PMAS'], 'string', 'max' => 7],
            [['D_CODIGO'], 'string', 'max' => 5],
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
            'CVE_ENTIDAD_FEDERATIVA' => 'Cve  Entidad  Federativa',
            'CVE_MUNICIPIO' => 'Cve  Municipio',
            'NUMINEGI_ID' => 'Numinegi  ID',
            'CVE_LOCALIDAD' => 'Cve  Localidad',
            'DESC_LOCALIDAD' => 'Desc  Localidad',
            'LOC_TIPO' => 'Loc  Tipo',
            'LOC_LATITUD' => 'Loc  Latitud',
            'LOC_LONGITUD' => 'Loc  Longitud',
            'LOC_LATDEC' => 'Loc  Latdec',
            'LOC_LONGDEC' => 'Loc  Longdec',
            'LOC_ALTITUD' => 'Loc  Altitud',
            'CARTA_ID' => 'Carta  ID',
            'PTOT' => 'Ptot',
            'PMAS' => 'Pmas',
            'PFEM' => 'Pfem',
            'VTOT' => 'Vtot',
            'ZONA_ID' => 'Zona  ID',
            'REGION_ID' => 'Region  ID',
            'D_CODIGO' => 'D  Codigo',
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
}
