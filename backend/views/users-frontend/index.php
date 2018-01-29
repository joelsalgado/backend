<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UsersFrontendSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios FURWEB';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-frontend-index">

    <h1 class="titulo"><?= Html::encode($this->title) ?>
        <p class="pull-right"><?= Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-success']) ?></p>
    </h1>
    <div class="panel">
        <div class="panel-body">
            <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'name',
                        'last_name',
                        'last_name2',
                        //'program',
                        //'period',
                        'birthday',
                        'user',
                        //'password',
                        //'email:email',
                        //'status',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
