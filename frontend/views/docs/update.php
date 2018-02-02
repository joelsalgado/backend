<?php

use yii\helpers\Html;
use frontend\widgets\Apartados\Apartados;

/* @var $this yii\web\View */
/* @var $model common\models\Docs */

$this->title = 'Documentos';
?>
<div class="docs-update">
    <div class="box">
        <?=
        Apartados::widget([
            'tipo'=>5,
            'apartado' => $apartados,
            'id' => $model->FOLIO,
            'mun' => $mun
        ])
        ?>
        <div class="box-header with-border">
            <h3 class="box-title">Subir Docunentos</h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
