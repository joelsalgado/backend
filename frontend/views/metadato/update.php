<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Actualizar';
$this->params['breadcrumbs'][] = ['label' => 'Metadatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FOLIO, 'url' => ['view', 'id' => $model->FOLIO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="metadato-update">
    <div class="box">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Datos Personales</a></li>
            <li><?= Html::a('Documentos', ['docs/update','id' => $model->FOLIO]) ?></li>
        </ul>
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales</h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
                'mun' => $mun,
                'loc' => $loc,
                'ageb' => $ageb,
                'nac' => $nac,
                'doc' => $doc,
                'nacim' => $nacim,
            ]) ?>
        </div>
        <!-- /.box-body -->
    </div>


</div>
