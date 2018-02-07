<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;
use Imagine\Image\Point;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class Docs extends \yii\db\ActiveRecord
{

    public $imageTemp;
    public $imageTemp2;
    public $imageTemp3;
    public $imageTemp4;
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
                ['imageTemp', 'imageTemp2', 'imageTemp3', 'imageTemp4'],
                'file',
                'extensions' => ['jpg', 'pdf'],
                //'mimeTypes' => ['image/jpeg',],
                //'maxSize'=>1024*240,
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
            'imageTemp' => 'Documento 1',
            'imageTemp2' => 'Documento 2',
            'imageTemp3' => 'Documento 3',
            'imageTemp4' => 'Documento 4',
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
        if ($type == 'imageTemp' || $type == 'imageTemp2' || $type == 'imageTemp3' || $type == 'imageTemp4'  ) {

            $image = Image::getImagine()->open($imageFile->tempName);
            FileHelper::createDirectory(Yii::getAlias('@images').'/docs/'.$tipo);

            $cropSizeThumb = new Box(440, 640);
            $image->resize($cropSizeThumb)
                ->save(Yii::getAlias('@images').'/docs/'.$tipo.'/'.$name, ['quality' => 70]);
            }

    }
}
