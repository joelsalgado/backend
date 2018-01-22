<?php

namespace frontend\controllers;

use common\models\Metadato;
use Yii;
use common\models\Familia;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;

/**
 * FamiliaController implements the CRUD actions for Familia model.
 */
class FamiliaController extends Controller
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
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Familia models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $model2 = Metadato::findOne($id);
        $mun = $model2->CVE_MUNICIPIO;
        $query = Familia::find()
            ->where(['FOLIO' => $id])
            ->orderBy('FECHA_REG DESC')
            ->one();

        if($query){
            $boton = true;
        }else{
            $boton = false;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Familia::find()->where(['FOLIO' => $id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'id' => $id,
            'mun' =>$mun,
            'boton' => $boton

        ]);
    }

    /**
     * Displays a single Familia model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new Familia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Familia();
        $model2 = Metadato::findOne($id);
        $mun = $model2->CVE_MUNICIPIO;
        $this->increment();
        if ($model->load(Yii::$app->request->post())) {
            $query = Familia::find()
                ->where(['FOLIO' => $id])
                ->orderBy('FECHA_REG DESC')
                ->one();

            if($query){
                $consecutivo = $query->CONSECUTIVO+1;
            }else{
                $consecutivo =1;
            }

            $request = New Request;

            $user = Yii::$app->user->id;

            $ip = $request->getUserIp();

            $periodo = Yii::$app->params['periodo'];

            $programa = Yii::$app->params['programa'];



            $folio_relacionado =  $periodo.$programa.$id;

            $model->FOLIO = $id;

            $model->N_PERIODO = $periodo;

            $model->CVE_PROGRAMA = $programa;

            $model->CONSECUTIVO = $consecutivo;

            $model->FOLIO_RELACIONADO = $folio_relacionado;

            $model->USU = $user.'';

            $model->IP = $ip;
            

            $model->NOMBRE_COMPLETO = $model->PRIMER_APELLIDO.' '.$model->SEGUNDO_APELLIDO. ' '. $model->NOMBRES;

            if($model->save()) {

                return $this->redirect(['index', 'id' => $model->FOLIO]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'mun' => $mun,
            'id' => $id
        ]);
    }


    public function actionUpdate($id,$folio)
    {
        $model = Familia::find()->where(['FOLIO' => $id, 'FOLIO_FUR' => $folio])->one();
        $model2 = Metadato::findOne($id);
        $mun = $model2->CVE_MUNICIPIO;

        if ($model->load(Yii::$app->request->post())) {

            $request = New Request;

            $user = Yii::$app->user->id;

            $ip = $request->getUserIp();

            $model->USU = $user.'';

            $model->IP = $ip;

            $model->NOMBRE_COMPLETO = $model->PRIMER_APELLIDO.' '.$model->SEGUNDO_APELLIDO. ' '. $model->NOMBRES;

            if($model->save()){
                return $this->redirect(['index', 'id' => $model->FOLIO]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'mun' => $mun,
        ]);
    }

    public function actionDelete($id,$folio)
    {
        $model = Familia::find()->where(['FOLIO' =>$id, 'FOLIO_FUR'=> $folio])->one();

        $model->delete();


        return $this->redirect(['index', 'id' => $id]);
    }

    /**
     * Finds the Familia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Familia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Familia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function increment()
    {
        $count = "SELECT count(*) FROM USER_SEQUENCES WHERE SEQUENCE_NAME = '" . Yii::$app->params['sequenceFamilia'] . "'";
        $val = Yii::$app->db->createCommand($count)->queryOne();
        $value = $val["COUNT(*)"];

        if ($value == 0) {
            $sql = "CREATE sequence " . Yii::$app->params['sequenceFamilia'];
            $result = Yii::$app->db->createCommand($sql)->query();
        }
    }
}
