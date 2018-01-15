<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Socioeconomico */

$this->title = 'Estudio SocioEconomico';

?>
<div class="socioeconomico-update">
    <div class="box">
        <ul class="nav nav-tabs">
            <li><?= Html::a('Datos Personales', ['metadato/update','id' => $model->FOLIO, 'mun' => $mun]) ?></li>
            <li class="active"><a href="#">Estudio SocioEconomico</a></li>

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
