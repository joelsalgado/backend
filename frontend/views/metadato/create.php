<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Crear Solicitante';
$this->params['breadcrumbs'][] = ['label' => 'Solicitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metadato-create">
    <div class="box">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Datos Personales</a></li>
        </ul>
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
                'nacim' => $nacim
            ]) ?>
        </div>
        <!-- /.box-body -->
    </div>

</div>
