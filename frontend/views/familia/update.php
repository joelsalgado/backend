<?php

use yii\helpers\Html;

$this->title = 'Actualizar Familiar';

?>
<div class="familia-update">

    <div class="box">
        <ul class="nav nav-tabs">
            <li><?= Html::a( Yii::$app->params['apartado2'], ['metadato/update','id' => $model->FOLIO, 'mun' => $mun]) ?></li>
            <li><?= Html::a( Yii::$app->params['apartado3'] , ['socioeconomico/update','id' => $model->FOLIO]) ?></li>
            <li class="active"> <a href="#"><?=Yii::$app->params['apartado4'] ?> </a></li>

        </ul>
        <div class="box-header with-border">
            <h3 class="box-title">CARACTERÍSTICAS SOCIODEMOGRÁFICAS </h3>
        </div>
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
    </div>
</div>
