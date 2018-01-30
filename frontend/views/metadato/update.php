<?php

use yii\helpers\Html;
use frontend\widgets\Apartados\Apartados;
/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Datos Personales';
?>
<div class="metadato-update">
    <div class="box">
        <?=
        Apartados::widget([
            'tipo'=>2,
            'apartado' => $apartado,
            'id' => $model->FOLIO,
            'mun' => $mun
        ])
        ?>

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
