<?php

use yii\helpers\Html;
use frontend\widgets\Apartados\Apartados;

/* @var $this yii\web\View */
/* @var $model common\models\Familia */

$this->title = 'Integrantes del Hogar';
?>
<div class="familia-create">

    <div class="box">
        <?=
        Apartados::widget([
            'tipo'=>4,
            'apartado' => $apartados,
            'id' => $id,
            'mun' => $mun
        ])
        ?>
        <div class="box-header with-border">
            <h3 class="box-title">Datos SocioDemograficos</h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
