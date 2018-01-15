<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Socioeconomico */

$this->title = 'Estudio SocioEconómico';
$this->params['breadcrumbs'][] = ['label' => 'Socioeconomicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="socioeconomico-create">

    <div class="box">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Estudio SocioEconómico</a></li>
        </ul>
        <div class="box-header with-border">
            <h3 class="box-title">Estudio SocioEconómico</h3>
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
