<?php


namespace frontend\modules\api\controllers;

use common\models\Agebs;
use common\models\Documentos;
use common\models\EntidadFederativa;
use common\models\Localidad;
use common\models\Map;
use common\models\Metadato;
use common\models\Municipio;
use common\models\Nacionalidades;
use common\models\Secciones;
use Yii;
use yii\db\ActiveRecord;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;

class ApiController extends ActiveController
{

    public $modelClass = '';


    public function behaviors()
    {
        $result = ArrayHelper::merge(parent::behaviors(), [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'applicants' => ['get'],
                    'municipios' => ['get'],
                    'agebs' => ['get'],
                    'localidades' => ['get'],
                    'create' => ['post'],
                ],
            ],
        ]);
        return $result;
    }

    public function actions()
    {
        return [];
    }

    

    public function actionMetadato(){
        $user = Metadato::find()->all();
        if (!is_null($user)) {
            return array('status' => true, 'data'=> $user);
        } else {
            return new NotFoundHttpException();
        }
    }

    public function actionMunicipios(){
        $mun = Municipio::edomex();
        if($mun) {
            return array('status' => true, 'data'=> $mun);
        } else {
            return new NotFoundHttpException();
        }
    }

    public function actionAgebs($mun)
    {
            $ageb = Agebs::cacheAgebs($mun);
            if($ageb) {
                return array('status' => true, 'data'=> $ageb);
            } else {
                return array('status' => false, 'message'=> 'Los id son numericos de 1 al 125');
            }
    }

    public function actionLocalidades($mun)
    {
        $loc = Localidad::cacheLocalidad($mun);
        if($loc) {
            return array('status' => true, 'data'=> $loc);
        } else {
            return array('status' => false, 'message'=> 'Los id son numericos de 1 al 125');
        }
    }

    public function actionSecciones($mun)
    {
        $sec = Secciones::cacheSecciones($mun);
        if($sec) {
            return array('status' => true, 'data'=> $sec);
        } else {
            return array('status' => false, 'message'=> 'Los id son numericos de 1 al 125');
        }
    }

    public function actionNacionalidades(){
        $nac = Nacionalidades::cacheNacionalidades();
        if($nac) {
            return array('status' => true, 'data'=> $nac);
        } else {
            return new NotFoundHttpException();
        }
    }

    public function actionDocumentof(){
        $docOf = Documentos::cacheDocumentosOf();
        if($docOf) {
            return array('status' => true, 'data'=> $docOf);
        } else {
            return new NotFoundHttpException();
        }
    }

    public function actionEntfed(){
        $entfed = EntidadFederativa::cacheEntidadFed();
        if($entfed) {
            return array('status' => true, 'data'=> $entfed);
        } else {
            return new NotFoundHttpException();
        }
    }

    public function actionMapa(){
        $map = Map::find()
            ->orderBy(['CVE_MUN' => 'DESC'])
            ->all();
        if($map) {
            return array('status' => true, 'data'=> $map);
        } else {
            return new NotFoundHttpException();
        }
    }


    public function actionCreate(){
        $data = Yii::$app->request->post();

       echo $data['last_name']; die;

        if (!is_null($user)) {
            return array('status' => true, 'data'=> $user);
        } else {
            return new NotFoundHttpException();
        }
    }

}