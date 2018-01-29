<?php

namespace frontend\controllers;

use common\models\Actividad;
use common\models\ActividadLaboral;
use common\models\Apartados;
use common\models\Cantidades;
use common\models\CasaDondeVive;
use common\models\Combustible;
use common\models\DependientesEconomicos;
use common\models\Discapacidad;
use common\models\Enfermedades;
use common\models\GradoEstudio;
use common\models\InstitucionesSalud;
use common\models\Lenguas;
use common\models\MaterialVivienda;
use common\models\Metadato;
use common\models\Orfandad;
use common\models\Parentesco;
use common\models\PerIngresos;
use common\models\RealizaActividad;
use common\models\Salarios;
use common\models\Sandren;
use common\models\ServicioAgua;
use common\models\ServicioLuz;
use common\models\Tiempo;
use common\models\TiempoRadicar;
use common\models\TipoEmpleo;
use Yii;
use common\models\Socioeconomico;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SocioeconomicoController implements the CRUD actions for Socioeconomico model.
 */
class SocioeconomicoController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Socioeconomico models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Socioeconomico::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Socioeconomico model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Socioeconomico model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Socioeconomico();
        $parentesco = Parentesco::cacheParentesco();
        $lengua = Lenguas::cacheLengua();
        $cantidades = Cantidades::cacheCantidades();
        $radicar = TiempoRadicar::cacheRadicar();
        $enfermedad = Enfermedades::cacheEnfermedad();
        $discapacidad = Discapacidad::cacheDisc();
        $institucion = InstitucionesSalud::cacheInstituciones();
        $orfandad = Orfandad::cacheOrfandad();
        $grado = GradoEstudio::cacheGrado();
        $empleo = TipoEmpleo::cacheEmpleo();
        $actividad = ActividadLaboral::cacheAL();
        $salario = Salarios::cacheSalarios();
        $dependientes = DependientesEconomicos::cacheDependientes();
        $actividad2 = Actividad::cacheActividad();
        $realizaA = RealizaActividad::cacheRealizaAct();
        $pering = PerIngresos::cachePerIngresos();
        $tiempo = Tiempo::cacheTiempo();
        $casadonde = CasaDondeVive::cacheCasaDonde();
        $material = MaterialVivienda::cacheMaterial();
        $servicioAgua= ServicioAgua::cacheServicioAgua();
        $sandren = Sandren::cacheSandren();
        $servluz = ServicioLuz::cacheServicioLuz();
        $combustible = Combustible::cacheCombustible();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('create', [
            'model' => $model,
            'parentesco' => $parentesco,
            'lengua' => $lengua,
            'cantidades' => $cantidades,
            'radicar' => $radicar,
            'enfermedad' => $enfermedad,
            'discapacidad' => $discapacidad,
            'institucion' => $institucion,
            'orfandad' => $orfandad,
            'grado' => $grado,
            'empleo' => $empleo,
            'actividad' => $actividad,
            'salario' => $salario,
            'dependientes' => $dependientes,
            'actividad2' => $actividad2,
            'realizaA' => $realizaA,
            'pering' => $pering,
            'tiempo' => $tiempo,
            'casadonde' => $casadonde,
            'material' => $material,
            'servicioAgua' => $servicioAgua,
            'sandren' => $sandren,
            'servluz' => $servluz,
            'combustible' => $combustible

        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = Metadato::findOne($id);
        $mun = $model2->CVE_MUNICIPIO;
        $apartado = Apartados::findOne($id);

        $parentesco = Parentesco::cacheParentesco();
        $lengua = Lenguas::cacheLengua();
        $cantidades = Cantidades::cacheCantidades();
        $radicar = TiempoRadicar::cacheRadicar();
        $enfermedad = Enfermedades::cacheEnfermedad();
        $discapacidad = Discapacidad::cacheDisc();
        $institucion = InstitucionesSalud::cacheInstituciones();
        $orfandad = Orfandad::cacheOrfandad();
        $grado = GradoEstudio::cacheGrado();
        $empleo = TipoEmpleo::cacheEmpleo();
        $actividad = ActividadLaboral::cacheAL();
        $salario = Salarios::cacheSalarios();
        $dependientes = DependientesEconomicos::cacheDependientes();
        $actividad2 = Actividad::cacheActividad();
        $realizaA = RealizaActividad::cacheRealizaAct();
        $pering = PerIngresos::cachePerIngresos();
        $tiempo = Tiempo::cacheTiempo();
        $casadonde = CasaDondeVive::cacheCasaDonde();
        $material = MaterialVivienda::cacheMaterial();
        $servicioAgua= ServicioAgua::cacheServicioAgua();
        $sandren = Sandren::cacheSandren();
        $servluz = ServicioLuz::cacheServicioLuz();
        $combustible = Combustible::cacheCombustible();

        if ($model->load(Yii::$app->request->post())) {
            $apartado->APARTADO3 = 1;
            if ($model->save() && $apartado->save()){
                return $this->redirect(['/familia', 'id' => $model->FOLIO]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'mun' => $mun,
            'parentesco' => $parentesco,
            'lengua' => $lengua,
            'cantidades' => $cantidades,
            'radicar' => $radicar,
            'enfermedad' => $enfermedad,
            'discapacidad' => $discapacidad,
            'institucion' => $institucion,
            'orfandad' => $orfandad,
            'grado' => $grado,
            'empleo' => $empleo,
            'actividad' => $actividad,
            'salario' => $salario,
            'dependientes' => $dependientes,
            'actividad2' => $actividad2,
            'realizaA' => $realizaA,
            'pering' => $pering,
            'tiempo' => $tiempo,
            'casadonde' => $casadonde,
            'material' => $material,
            'servicioAgua' => $servicioAgua,
            'sandren' => $sandren,
            'servluz' => $servluz,
            'combustible' => $combustible,
            'apartado' => $apartado,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Socioeconomico::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
