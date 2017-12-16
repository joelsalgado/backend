<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Update Metadato: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Metadatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FOLIO, 'url' => ['view', 'id' => $model->FOLIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="metadato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
