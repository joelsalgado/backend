<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;
use Imagine\Image\Point;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "FURWEB_CONTROL_DOCTOS_150".
 *
 * @property double $N_PERIODO
 * @property double $CVE_PROGRAMA
 * @property int $FOLIO
 * @property string $FOLIO_RELACIONADO
 * @property string $DOCTO_1
 * @property string $DOCTO_2
 * @property string $DOCTO_3
 * @property string $DOCTO_4
 * @property string $DOCTO_5
 * @property string $DOCTO_6
 * @property string $DOCTO_7
 * @property string $DOCTO_8
 * @property string $DOCTO_9
 * @property string $DOCTO_10
 * @property string $REVISO
 * @property string $AUTORIZO
 * @property string $SUPERVISO
 * @property string $OBS_1
 * @property string $OBS_2
 * @property string $FECHA_REG
 * @property string $USU
 * @property string $PW
 * @property string $IP
 * @property string $FECHA_M
 * @property string $USU_M
 * @property string $PW_M
 * @property string $IP_M
 */
class Docs extends \yii\db\ActiveRecord
{

    public $imageTemp;
    public $imageTemp2;
    public static function tableName()
    {
        return 'FURWEB_CONTROL_DOCTOS_150';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA'], 'number'],
            [['FOLIO'], 'required'],
            [['FOLIO'], 'integer'],
            [['FECHA_REG', 'FECHA_M'], 'string'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['DOCTO_1', 'DOCTO_2', 'DOCTO_3', 'DOCTO_4', 'DOCTO_5', 'DOCTO_6', 'DOCTO_7', 'DOCTO_8', 'DOCTO_9', 'DOCTO_10'], 'string', 'max' => 200],
            [['REVISO', 'AUTORIZO', 'SUPERVISO'], 'string', 'max' => 100],
            [['OBS_1', 'OBS_2'], 'string', 'max' => 300],
            [['USU', 'PW', 'IP', 'USU_M', 'PW_M', 'IP_M'], 'string', 'max' => 80],
            [
                ['imageTemp', 'imageTemp2'],
                'image',
                'extensions' => ['jpg'],
                'mimeTypes' => ['image/jpeg',],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'N_PERIODO' => 'N  Periodo',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'FOLIO' => 'Folio',
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'imageTemp' => 'Acta de naciemito (Tamaño recomendado 100 kb)',
            'DOCTO_1' => 'Docto 1',
            'DOCTO_2' => 'Docto 2',
            'DOCTO_3' => 'Docto 3',
            'DOCTO_4' => 'Docto 4',
            'DOCTO_5' => 'Docto 5',
            'DOCTO_6' => 'Docto 6',
            'DOCTO_7' => 'Docto 7',
            'DOCTO_8' => 'Docto 8',
            'DOCTO_9' => 'Docto 9',
            'DOCTO_10' => 'Docto 10',
            'REVISO' => 'Reviso',
            'AUTORIZO' => 'Autorizo',
            'SUPERVISO' => 'Superviso',
            'OBS_1' => 'Obs 1',
            'OBS_2' => 'Obs 2',
            'FECHA_REG' => 'Fecha  Reg',
            'USU' => 'Usu',
            'PW' => 'Pw',
            'IP' => 'Ip',
            'FECHA_M' => 'Fecha  M',
            'USU_M' => 'Usu  M',
            'PW_M' => 'Pw  M',
            'IP_M' => 'Ip  M',
        ];
    }


    public function  saveImage($imageFile, $name, $type, $tipo) {

        $image = Image::getImagine()->open($imageFile->tempName);

        if ($type == 'imageTemp' || $type == 'imageTemp2' ) {
            FileHelper::createDirectory(Yii::getAlias('@images').'/'.$tipo);

            $cropSizeThumb = new Box(600, 400);
            $image->resize($cropSizeThumb)
                ->save(Yii::getAlias('@images').'/'.$tipo.'/'.$name, ['quality' => 70]);
        }
    }
}
