<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Familia */

$this->title = 'Integrantes del Hogar';
$this->params['breadcrumbs'][] = ['label' => 'Familias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-create">

    <div class="box">
        <ul class="nav nav-tabs">
            <li><?= Html::a( Yii::$app->params['apartado2'], ['metadato/update','id' => $id, 'mun' => $mun]) ?></li>
            <li><?= Html::a( Yii::$app->params['apartado3'] , ['socioeconomico/update','id' => $id]) ?></li>
            <li class="active"> <a href="#"><?=Yii::$app->params['apartado4'] ?> </a></li>
        </ul>
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
