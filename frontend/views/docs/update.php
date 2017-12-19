<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Docs */

$this->title = 'Documentos';
$this->params['breadcrumbs'][] = ['label' => 'Docs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FOLIO, 'url' => ['view', 'id' => $model->FOLIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="docs-update">
    <div class="box">
        <ul class="nav nav-tabs">
            <li><a href="/metadato/update?id=<?=$model->FOLIO?>&mun=<?= $mun ?>">Datos Personales</a></li>
            <li class="active"><a href="#">Documentos</a></li>

        </ul>
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales</h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
