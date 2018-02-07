<?php

namespace frontend\controllers;

use common\models\Metadato;
use common\models\Apartados;
use Yii;
use common\models\Docs;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class DocsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update'],
                'rules' => [
                    [
                        'actions' => ['update','index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        die;
        $dataProvider = new ActiveDataProvider([
            'query' => Docs::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        die;
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        die;
        $model = new Docs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        try{
            $model2 = Metadato::findOne($id);
        }catch (Exception $exception){
            $model2 = null;
        }
        if($model2){
            $model = $this->findModel($id);
            $mun = $model2->CVE_MUNICIPIO;
            $apartados = Apartados::findOne($id);

            if ($model->load(Yii::$app->request->post()) ) {
                $model->DOCTO_1 = $this->loadImage('DOCTO_1', 'imageTemp', $model, 'DOC1');
                $model->DOCTO_2 = $this->loadImage('DOCTO_2', 'imageTemp2', $model, 'DOC2');
                $model->DOCTO_3 = $this->loadImage('DOCTO_3', 'imageTemp3', $model, 'DOC3');
                $model->DOCTO_4 = $this->loadImage('DOCTO_4', 'imageTemp4', $model, 'DOC4');
                $model->save(false);
                return $this->redirect(['update', 'id' => $model->FOLIO]);
            }

            return $this->render('update', [
                'model' => $model,
                'mun' => $mun,
                'apartados' => $apartados,

            ]);
        }
        else{
            throw new \yii\web\NotFoundHttpException('ID INCORRECTO');
        }

    }

    public function actionDelete($id)
    {
        die;
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Docs::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function loadImage($field, $type, $model, $tipo) {
        $imageFile= UploadedFile::getInstanceByName('Docs['.$type.']');
        $modelNamePhoto = $model->$field;


        if ($imageFile) {
            $ext = $imageFile->getExtension();
            $sanitizeName = str_replace(' ', '_', $model->FOLIO_RELACIONADO);
            $name = $sanitizeName.'-'.$tipo.'.'.$imageFile->getExtension();

            if ($ext == 'pdf'){
                $pdf = null;
                $pdf = UploadedFile::getInstance($model, $type);
                FileHelper::createDirectory(Yii::getAlias('@images').'/docs/'.$model->FOLIO);
                //var_dump($name); die;
                $pdf->saveAs(Yii::getAlias('@images').'/docs/'.$model->FOLIO.'/'.$name, false);
            }else{
                $tipo = $model->FOLIO;
                $model->saveImage($imageFile, $name, $type, $tipo, $ext);
            }

            return $name;
        } else {
            return $modelNamePhoto;
        }
    }

}
