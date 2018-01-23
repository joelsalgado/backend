<?php

use yii\helpers\Html;
use frontend\widgets\Apartados\Apartados;
$this->title = 'Datos Personales';

?>
<div class="metadato-create">
    <div class="box">
        <?=
        Apartados::widget([
            'tipo'=>2,
            'accion'=> 'c',
        ])
        ?>
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales</h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
                'loc'  => $loc,
                'ageb' => $ageb,
                'mun' => $mun,
                'nac' => $nac,
                'doc' => $doc,
                'nacim' => $nacim,
                'sec' => $sec
            ]) ?>
        </div>
        <!-- /.box-body -->
    </div>

</div>
