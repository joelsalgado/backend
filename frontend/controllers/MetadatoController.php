<?php

namespace frontend\controllers;

use common\models\Agebs;
use common\models\Documentos;
use common\models\EntidadFederativa;
use common\models\Localidad;
use common\models\Municipio;
use common\models\Nacionalidades;
use Yii;
use common\models\Metadato;
use common\models\MetadatoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MetadatoController implements the CRUD actions for Metadato model.
 */
class MetadatoController extends Controller
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
     * Lists all Metadato models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MetadatoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Metadato model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($mun)
    {

        $model = new Metadato();
        $loc = Localidad::find()
            ->where(['CVE_ENTIDAD_FEDERATIVA' => 15, 'CVE_MUNICIPIO' => $mun])
            ->all();

        $ageb = Agebs::find()->where(['MUNICIPIO_ID' => $mun])->all();

        $nac = Nacionalidades::find()->all();

        $doc = Documentos::find()->all();

        $nacim = EntidadFederativa::find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('create', [
            'model' => $model,
            'loc' => $loc,
            'ageb' => $ageb,
            'mun' => $mun,
            'nac' => $nac,
            'doc' => $doc,
            'nacim' => $nacim,
        ]);
    }

    /**
     * Updates an existing Metadato model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Metadato model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionMunicipio()
    {
        $model = Municipio::find()
                ->where(['ENTIDADFEDERATIVAID' => 15])
                ->orderBy(['MUNICIPIONOMBRE' => 'DESC'])
                ->all();

        return $this->render('municipio', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Metadato::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
