<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MetadatoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Metadatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metadato-index">

    <h1 class="titulo"><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Metadato', ['municipio'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'N_PERIODO',
            //'CVE_PROGRAMA',
            'FOLIO',
            //'FOLIO_RELACIONADO',
            //'CVE_DEPENDENCIA',
            //'CVE_COORDINACION',
            //'TIPO_BENEFICIARIO',
            'PRIMER_APELLIDO',
            'SEGUNDO_APELLIDO',
            'NOMBRES',
            //'NOMBRE_COMPLETO',
            //'FECHA_NACIMIENTO',
            //'NUMERO_HIJOS',
            //'SEXO',
            //'TP_ID_OFICIAL',
            //'FOLIO_ID_OFICIAL',
            //'CVE_ESTADO_CIVIL',
            //'CVE_GRADO_ESTUDIOS',
            //'CVE_PARENTESCO',
            'CURP',
            //'RFC',
            //'CVE_NACIONALIDAD',
            //'CVE_LUGAR_NACIMIENTO',
            //'CVE_ACTIVIDAD_LABORAL',
            //'CVE_SITUACION_LABORAL',
            //'CALLE',
            //'NUM_EXT',
            //'NUM_INT',
            //'MANZANA',
            //'LOTE',
            //'CODIGO_POSTAL',
            //'SECCION',
            //'ENTRE_CALLE',
            //'Y_CALLE',
            //'OTRA_REFERENCIA',
            //'LADA_TELEFONO',
            //'TELEFONO',
            //'LADA_FAX',
            //'FAX',
            //'COLONIA',
            //'CVE_LOCALIDAD',
            //'LOCALIDAD',
            //'AGEB',
            //'CVE_MUNICIPIO',
            //'CVE_ENTIDAD_FEDERATIVA',
            //'CVE_REGION',
            //'CORREO_ELECTRONICO',
            //'MISMO_DOMICILIO',
            //'CVE_RED_SOCIAL',
            //'RED_SOCIAL',
            //'LATITUD',
            //'LONGITUD',
            //'TIPO_BENEFICIARIO_C',
            //'PRIMER_APELLIDO_C',
            //'SEGUNDO_APELLIDO_C',
            //'NOMBRES_C',
            //'NOMBRE_COMPLETO_C',
            //'FECHA_NACIMIENTO_C',
            //'SEXO_C',
            //'TP_ID_OFICIAL_C',
            //'FOLIO_ID_OFICIAL_C',
            //'CVE_ESTADO_CIVIL_C',
            //'CVE_GRADO_ESTUDIOS_C',
            //'CVE_PARENTESCO_C',
            //'CURP_C',
            //'RFC_C',
            //'CVE_NACIONALIDAD_C',
            //'CVE_LUGAR_NACIMIENTO_C',
            //'CVE_ACTIVIDAD_LABORAL_C',
            //'CVE_SITUACION_LABORAL_C',
            //'MISMO_DOMICILIO_C',
            //'CALLE_C',
            //'NUM_EXT_C',
            //'NUM_INT_C',
            //'MANZANA_C',
            //'LOTE_C',
            //'CODIGO_POSTAL_C',
            //'SECCION_C',
            //'ENTRE_CALLE_C',
            //'Y_CALLE_C',
            //'OTRA_REFERENCIA_C',
            //'LADA_TELEFONO_C',
            //'TELEFONO_C',
            //'LADA_FAX_C',
            //'FAX_C',
            //'COLONIA_C',
            //'CVE_LOCALIDAD_C',
            //'LOCALIDAD_C',
            //'CVE_MUNICIPIO_C',
            //'CVE_ENTIDAD_FEDERATIVA_C',
            //'CVE_REGION_C',
            //'AGEB_C',
            //'NUMERO_HIJOS_C',
            //'CORREO_ELECTRONICO_C',
            //'CVE_RED_SOCIAL_C',
            //'RED_SOCIAL_C',
            //'LATITUD_C',
            //'LONGITUD_C',
            //'STATUS_1',
            //'STATUS_2',
            //'USU',
            //'PW',
            //'IP',
            //'FECHA_REG',
            //'USU_M',
            //'PW_M',
            //'IP_M',
            //'FECHA_M',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
