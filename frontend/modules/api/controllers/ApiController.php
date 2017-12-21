<?php


namespace frontend\modules\api\controllers;

use common\models\Metadato;
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

}