<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Familia */

$this->title = $model->FOLIO;
$this->params['breadcrumbs'][] = ['label' => 'Familias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FOLIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FOLIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'N_PERIODO',
            'CVE_PROGRAMA',
            'FOLIO',
            'CONSECUTIVO',
            'FOLIO_FUR',
            'FOLIO_RELACIONADO',
            'PRIMER_APELLIDO',
            'SEGUNDO_APELLIDO',
            'NOMBRES',
            'NOMBRE_COMPLETO',
            'FECHA_NACIMIENTO',
            'NUMERO_HIJOS',
            'SEXO',
            'CVE_ESTADO_CIVIL',
            'CVE_GRADO_ESTUDIOS',
            'CVE_PARENTESCO',
            'CURP',
            'CVE_NACIONALIDAD',
            'CVE_LUGAR_NACIMIENTO',
            'CORREO_ELECTRONICO',
            'FOLIO_ID_OFICIAL',
            'CVE_ACTIVIDAD_LABORAL',
            'ASISTE_ESC',
            'CVE_DISCAPACIDAD',
            'SABELEER',
            'STATUS_2',
            'FECHA_REG',
            'USU',
            'PW',
            'IP',
            'FECHA_M',
            'USU_M',
            'PW_M',
            'IP_M',
        ],
    ]) ?>

</div>
