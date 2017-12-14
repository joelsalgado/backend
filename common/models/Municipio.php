<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "CAT_MUNICIPIO".
 *
 * @property int $ID
 * @property int $ENTIDADFEDERATIVAID
 * @property int $MUNICIPIOID
 * @property int $MUNICIPIOIDESPECIAL
 * @property string $MUNICIPIONOMBRE
 * @property int $MUNICIPIOESTATUS
 * @property int $REGIONID
 * @property int $MUNICIPIOID_SBIS
 * @property int $REGIONID_SBIS
 * @property int $REGIONID_GAB
 * @property int $COINCIDES_CANTPROG
 *
 * @property CATENTIDADFEDERATIVA $1
 */
class Municipio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAT_MUNICIPIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'ENTIDADFEDERATIVAID', 'MUNICIPIOID', 'MUNICIPIOIDESPECIAL', 'MUNICIPIOESTATUS', 'REGIONID', 'MUNICIPIOID_SBIS', 'REGIONID_SBIS', 'REGIONID_GAB', 'COINCIDES_CANTPROG'], 'integer'],
            [['MUNICIPIONOMBRE'], 'string', 'max' => 60],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function get1()
    {
        return $this->hasOne(CATENTIDADFEDERATIVA::className(), ['CVE_ENTIDAD_FEDERATIVA' => '1']);
    }
}
