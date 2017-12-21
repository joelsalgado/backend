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

/**
 * DocsController implements the CRUD actions for Docs model.
 */
class DocsController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Docs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Docs::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Docs model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Docs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
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

    /**
     * Updates an existing Docs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
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

    /**
     * Deletes an existing Docs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Docs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Docs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
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
