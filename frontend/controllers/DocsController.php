<?php

namespace frontend\controllers;

use common\models\Metadato;
use Yii;
use common\models\Docs;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class DocsController extends Controller
{
    public function behaviors()
    {
        return [
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
        $dataProvider = new ActiveDataProvider([
            'query' => Docs::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
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
        $model = $this->findModel($id);
        $model2 = Metadato::findOne($id);
        $mun = $model2->CVE_MUNICIPIO;

        if ($model->load(Yii::$app->request->post()) ) {
            $model->DOCTO_1 = $this->loadImage('DOCTO_1', 'imageTemp', $model, 'ACTA');
            $model->DOCTO_2 = $this->loadImage('DOCTO_2', 'imageTemp2', $model, 'CURP');
            $model->save();
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('update', [
            'model' => $model,
            'mun' => $mun
        ]);
    }

    public function actionDelete($id)
    {
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
        //var_dump($modelNamePhoto); die;
        if ($imageFile) {
            $sanitizeName = str_replace(' ', '_', $model->FOLIO_RELACIONADO);
            $name =
                $sanitizeName.'-'.$tipo.'.'.$imageFile->getExtension();


            $model->saveImage($imageFile, $name, $type, $tipo);
            return $name;
        } else {
            return $modelNamePhoto;
        }
    }

}
