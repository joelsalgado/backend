<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Datos Personales';
$this->params['breadcrumbs'][] = ['label' => 'Solicitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="metadato-update">
    <div class="box">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Datos Personales</a></li>
            <li><?= Html::a('Estudio SocioEconomico', ['socioeconomico/update','id' => $model->FOLIO]) ?></li>
            <li><?= Html::a(Yii::$app->params['apartado4'], ['/familia','id' => $model->FOLIO]) ?></li>
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
                'sec' => $sec,
            ]) ?>
        </div>
        <!-- /.box-body -->
    </div>


</div>
