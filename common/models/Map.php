<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%MAP}}".
 *
 * @property double $GID
 * @property double $CVE_ENT
 * @property double $CVE_MUN
 * @property string $NOM_MUN
 * @property double $POBTOT
 * @property double $POBMAS
 * @property double $POBFEM
 * @property double $REGION_ID
 * @property string $REGION_NOM
 * @property string $REGION_DES
 * @property double $COORDX
 * @property double $COORDY
 * @property double $ORIG_FID
 * @property string $GEOM
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%MAP}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GID', 'CVE_ENT', 'CVE_MUN', 'POBTOT', 'POBMAS', 'POBFEM', 'REGION_ID', 'COORDX', 'COORDY', 'ORIG_FID'], 'number'],
            [['NOM_MUN', 'REGION_DES'], 'string', 'max' => 60],
            [['REGION_NOM'], 'string', 'max' => 10],
            [['GEOM'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GID' => 'Gid',
            'CVE_ENT' => 'Cve  Ent',
            'CVE_MUN' => 'Cve  Mun',
            'NOM_MUN' => 'Nom  Mun',
            'POBTOT' => 'Pobtot',
            'POBMAS' => 'Pobmas',
            'POBFEM' => 'Pobfem',
            'REGION_ID' => 'Region  ID',
            'REGION_NOM' => 'Region  Nom',
            'REGION_DES' => 'Region  Des',
            'COORDX' => 'Coordx',
            'COORDY' => 'Coordy',
            'ORIG_FID' => 'Orig  Fid',
            'GEOM' => 'Geom',
        ];
    }
}
