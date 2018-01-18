<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Socioeconomico */

$this->title = 'Estudio SocioEconomico';

?>
<div class="socioeconomico-update">
    <div class="box">
        <ul class="nav nav-tabs">
            <li><?= Html::a(Yii::$app->params['apartado2'], ['metadato/update','id' => $model->FOLIO, 'mun' => $mun]) ?></li>
            <li class="active"><a href="#"><?= Yii::$app->params['apartado3']?></a></li>
            <li><?= Html::a(Yii::$app->params['apartado4'], ['/familia','id' => $model->FOLIO]) ?></li>

        </ul>
        <div class="box-header with-border">
            <h3 class="box-title">Estudio SocioEconomico</h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
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
            ]) ?>
        </div>
    </div>

</div>
