<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Docs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Create Docs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'N_PERIODO',
            'CVE_PROGRAMA',
            'FOLIO',
            'FOLIO_RELACIONADO',
            'DOCTO_1',
            //'DOCTO_2',
            //'DOCTO_3',
            //'DOCTO_4',
            //'DOCTO_5',
            //'DOCTO_6',
            //'DOCTO_7',
            //'DOCTO_8',
            //'DOCTO_9',
            //'DOCTO_10',
            //'REVISO',
            //'AUTORIZO',
            //'SUPERVISO',
            //'OBS_1',
            //'OBS_2',
            //'FECHA_REG',
            //'USU',
            //'PW',
            //'IP',
            //'FECHA_M',
            //'USU_M',
            //'PW_M',
            //'IP_M',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
