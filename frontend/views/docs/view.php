<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Docs */

$this->title = $model->FOLIO;
$this->params['breadcrumbs'][] = ['label' => 'Docs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FOLIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FOLIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'N_PERIODO',
            'CVE_PROGRAMA',
            'FOLIO',
            'FOLIO_RELACIONADO',
            'DOCTO_1',
            'DOCTO_2',
            'DOCTO_3',
            'DOCTO_4',
            'DOCTO_5',
            'DOCTO_6',
            'DOCTO_7',
            'DOCTO_8',
            'DOCTO_9',
            'DOCTO_10',
            'REVISO',
            'AUTORIZO',
            'SUPERVISO',
            'OBS_1',
            'OBS_2',
            'FECHA_REG',
            'USU',
            'PW',
            'IP',
            'FECHA_M',
            'USU_M',
            'PW_M',
            'IP_M',
        ],
    ]) ?>

</div>
