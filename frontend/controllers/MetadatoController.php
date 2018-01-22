<?php

namespace frontend\controllers;

use common\models\Agebs;
use common\models\Apartados;
use common\models\Cuentas;
use common\models\Diario;
use common\models\Docs;
use common\models\Documentos;
use common\models\EntidadFederativa;
use common\models\Localidad;
use common\models\Municipio;
use common\models\Nacionalidades;
use common\models\Ponderacion;
use common\models\Secciones;
use common\models\Socioeconomico;
use common\models\Status;
use kartik\mpdf\Pdf;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Yii;
use common\models\Metadato;
use common\models\MetadatoSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;

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


    public function actionCreate($mun)
    {
        $model = new Metadato();
        $docs = new Docs();
        $status = new Status();
        $ponderacion = new Ponderacion();
        $diario = new Diario();
        $cuentas = new Cuentas();
        $socioeconomico = new Socioeconomico();
        $apartados  = new Apartados();

        $loc = Localidad::cacheLocalidad($mun);
        $ageb = Agebs::cacheAgebs($mun);
        $nac = Nacionalidades::cacheNacionalidades();
        $doc = Documentos::cacheDocumentosOf();
        $nacim = EntidadFederativa::cacheEntidadFed();
        $sec = Secciones::cacheSecciones($mun);

        if ($model->load(Yii::$app->request->post())) {

            $id = $this->increment();

            $request = New Request;

            $user = Yii::$app->user->id;

            $ip = $request->getUserIp();

            $periodo = Yii::$app->params['periodo'];

            $programa = Yii::$app->params['programa'];

            $dependencia = Yii::$app->params['dependencia'];

            $folio_relacionado =  $periodo.$programa.$id;

            $model->FOLIO = $id;

            $model->N_PERIODO = $periodo;

            $model->CVE_PROGRAMA = $programa;

            $model->FOLIO_RELACIONADO = $folio_relacionado;

            $model->USU = $user.'';

            $model->IP = $ip;

            $model->CVE_DEPENDENCIA = $dependencia.'';

            $model->NOMBRE_COMPLETO = $model->PRIMER_APELLIDO.' '.$model->SEGUNDO_APELLIDO. ' '. $model->NOMBRES;


            $socioeconomico->FOLIO = $id;

            $socioeconomico->N_PERIODO = $periodo;

            $socioeconomico->CVE_PROGRAMA = $programa;

            $socioeconomico->FOLIO_RELACIONADO = $folio_relacionado;

            $socioeconomico->USU = $user.'';

            $socioeconomico->IP = $ip;


            $apartados->FOLIO = $id;

            $apartados->N_PERIODO = $periodo;

            $apartados->CVE_PROGRAMA = $programa;

            $apartados->FOLIO_RELACIONADO = $folio_relacionado;

            $apartados->APARTADO1 = 1;

            $apartados->APARTADO2 = 1;

            $apartados->USU = $user.'';

            $apartados->IP = $ip;


            $docs->FOLIO = $id;

            $docs->N_PERIODO = $periodo;

            $docs->CVE_PROGRAMA = $programa;

            $docs->FOLIO_RELACIONADO = $folio_relacionado;

            $docs->USU = $user.'';

            $docs->IP = $ip;


            $status->FOLIO = $id;

            $status->N_PERIODO = $periodo;

            $status->CVE_PROGRAMA = $programa;

            $status->FOLIO_RELACIONADO = $folio_relacionado;

            $status->STATUS_P1_01 = 0;

            $status->USU = $user.'';

            $status->IP = $ip;


            $ponderacion->FOLIO = $id;

            $ponderacion->N_PERIODO = $periodo;

            $ponderacion->CVE_PROGRAMA = $programa;

            $ponderacion->FOLIO_RELACIONADO = $folio_relacionado;

            $ponderacion->USU = $user.'';

            $ponderacion->P_01=0;

            $ponderacion->IP = $ip;


            $diario->FOLIO = $id;

            $diario->N_PERIODO = $periodo;

            $diario->CVE_PROGRAMA = $programa;

            $diario->FOLIO_RELACIONADO = $folio_relacionado;

            $diario->PROCESO_ID = 2;

            $diario->ACTIVIDAD_ID = 2003;

            $diario->TRX_ID = 3;

            $diario->USU = $user.'';

            $diario->IP = $ip;

            $cuentas->FOLIO = $id;

            $cuentas->N_PERIODO = $periodo;

            $cuentas->CVE_PROGRAMA = $programa;

            $cuentas->FOLIO_RELACIONADO = $folio_relacionado;

            $cuentas->USU = $user.'';

            $cuentas->IP = $ip;


            if ($model->save() &&
                $socioeconomico->save() &&
                $docs->save() &&
                $status->save() &&
                $ponderacion->save() &&
                $diario->save() &&
                $apartados->save() &&
                $cuentas->save()){
                return $this->redirect(['socioeconomico/update', 'id' => $model->FOLIO]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'loc' => $loc,
            'ageb' => $ageb,
            'mun' => $mun,
            'nac' => $nac,
            'doc' => $doc,
            'nacim' => $nacim,
            'sec' => $sec,
        ]);
    }


    public function actionUpdate($id,$mun)
    {
        $model = $this->findModel($id);

        $loc = Localidad::cacheLocalidad($mun);
        $ageb = Agebs::cacheAgebs($mun);
        $sec = Secciones::cacheSecciones($mun);
        $nac = Nacionalidades::cacheNacionalidades();
        $doc = Documentos::cacheDocumentosOf();
        $nacim = EntidadFederativa::cacheEntidadFed();


        if ($model->load(Yii::$app->request->post())) {
            $request = New Request;

            $user = Yii::$app->user->id;

            $ip = $request->getUserIp();

            $model->USU = $user.'';

            $model->IP = $ip;

            $model->NOMBRE_COMPLETO = $model->PRIMER_APELLIDO.' '.$model->SEGUNDO_APELLIDO. ' '. $model->NOMBRES;

            if($model->validate()){
                if($model->save()) {
                    return $this->redirect(['/socioeconomico/update', 'id' => $model->FOLIO]);
                }
            }

        }

        return $this->render('update', [
            'model' => $model,
            'loc' => $loc,
            'ageb' => $ageb,
            'nac' => $nac,
            'doc' => $doc,
            'nacim' => $nacim,
            'mun' => $mun,
            'sec' => $sec
        ]);
    }

    public function actionFolio($id){

        $metadato = Metadato::find()->where(['FOLIO' => $id]);
        if($metadato){
            Yii::$app->session->setFlash('success', "Registro Correto tu folio es: ".$id."");
            $apartado = Apartados::findOne($id);
            $apartado->APARTADO4 = 1;
            if ($apartado->save()) {
                $dataProvider = new ActiveDataProvider([
                    'query' => $metadato,
                ]);

                return $this->render('folio', [
                    'dataProvider' => $dataProvider,
                ]);
            }

        }
    }


    public function actionReport($id) {
        $model = Metadato::findOne($id);

        $generator = new BarcodeGeneratorPNG();
        $code =  base64_encode($generator->getBarcode($model->FOLIO_RELACIONADO, $generator::TYPE_CODE_128_B));

        $content = $this->renderPartial('_reportView', [
            'model'=> $model,
            'code' => $code
        ]);
        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8, // leaner size using standard fonts
            'format' => Pdf::FORMAT_A4,
            'destination' => Pdf::DEST_BROWSER,
            'content' => $content,
            'options' => [
                'title' => 'FUR'
            ],
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            'methods' => [
                'SetHeader' => ['Secretaria de Desarrollo Social'],
                'SetFooter' => ['|Pagina {PAGENO}|'],
            ]
        ]);
        return $pdf->render();
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionMunicipio()
    {
        $mun = Municipio::edomex();
        if($mun) {
            return $this->render('municipio', [
                'model' => $mun,
            ]);
        }
        else{
            throw new \yii\web\NotFoundHttpException;
        }
    }


    protected function findModel($id)
    {
        if (($model = Metadato::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function increment(){
        $count = "SELECT count(*) FROM USER_SEQUENCES WHERE SEQUENCE_NAME = '".Yii::$app->params['seqMetadato']."'";
        $val = Yii::$app->db->createCommand($count)->queryOne();
        $value = $val["COUNT(*)"];
        if ($value <= 0) {
            $sql = "CREATE sequence ".Yii::$app->params['seqMetadato'];
            //$result = Yii::$app->db->createCommand($sql)->query();
        }
        $sql2 = "SELECT ".Yii::$app->params['seqMetadato'].".NEXTVAL FROM DUAL";
        $resultado = Yii::$app->db->createCommand($sql2)->queryOne();
        return $resultado["NEXTVAL"];
    }

}
