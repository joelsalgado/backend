<?php

use yii\helpers\Html;
use frontend\widgets\Apartados\Apartados;

$this->title = 'Actualizar Familiar';

?>
<div class="familia-update">

    <div class="box">
        <?=
        Apartados::widget([
            'tipo'=>4,
            'apartado' => $apartados,
            'id' => $model->FOLIO,
            'mun' => $mun
        ])
        ?>
        <div class="box-header with-border">
            <h3 class="box-title">CARACTERÍSTICAS SOCIODEMOGRÁFICAS </h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
    </div>
</div>
