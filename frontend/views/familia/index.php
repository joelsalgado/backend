<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Familias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Create Familia', ['create', 'id'=>$id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'N_PERIODO',
            //'CVE_PROGRAMA',
            //'FOLIO',
            'CONSECUTIVO',
            //'FOLIO_FUR',
            //'FOLIO_RELACIONADO',
            //'PRIMER_APELLIDO',
            //'SEGUNDO_APELLIDO',
            //'NOMBRES',
            'NOMBRE_COMPLETO',
            'FECHA_NACIMIENTO',
            //'NUMERO_HIJOS',
            'SEXO',
            //'CVE_ESTADO_CIVIL',
            //'CVE_GRADO_ESTUDIOS',
            //'CVE_PARENTESCO',
            'CURP',
            //'CVE_NACIONALIDAD',
            //'CVE_LUGAR_NACIMIENTO',
            //'CORREO_ELECTRONICO',
            //'FOLIO_ID_OFICIAL',
            //'CVE_ACTIVIDAD_LABORAL',
            //'ASISTE_ESC',
            //'CVE_DISCAPACIDAD',
            //'SABELEER',
            //'STATUS_2',
            //'FECHA_REG',
            //'USU',
            //'PW',
            //'IP',
            //'FECHA_M',
            //'USU_M',
            //'PW_M',
            //'IP_M',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
