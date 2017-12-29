<?php


namespace frontend\modules\api\controllers;

use common\models\Agebs;
use common\models\Metadato;
use common\models\Municipio;
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

    public function actionAgebs($id)
    {
        $cacheName = 'Agebs' . $id;

        if (Yii::$app->cache->get($cacheName) === false) {
            $ageb = Agebs::find()->where(['MUNICIPIO_ID' => $id, 'ENTIDAD_ID' => 15])->all();

            if($ageb) {
                Yii::$app->cache->set($cacheName, $ageb);
            } else {
                return array('status' => false, 'message'=> 'Los id son numericos de 1 al 125');
            }
        }

        if (Yii::$app->cache->get($cacheName)) {
            return Yii::$app->cache->get($cacheName);
        }else {
            return array('status' => false, 'message'=> 'No hay perro');
        }

    }


    public function actionCreate(){
        $data = Yii::$app->request->post();

        var_dump($data['last_name']); die;

        if (!is_null($user)) {
            return array('status' => true, 'data'=> $user);
        } else {
            return new NotFoundHttpException();
        }
    }

}