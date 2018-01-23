<?php

use yii\helpers\Html;
use frontend\widgets\Apartados\Apartados;

/* @var $this yii\web\View */
/* @var $model common\models\Socioeconomico */

$this->title = 'Estudio SocioEconomico';

?>
<div class="socioeconomico-update">
    <div class="box">
        <?=
        Apartados::widget([
            'tipo'=>3,
            'apartado' => $apartado,
            'id' => $model->FOLIO,
            'mun' => $mun
        ])
        ?>
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
