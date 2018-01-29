<?php
use yii\helpers\Html;
$this->title = 'FUR';
?>
<div class="site-index">
    <div class="box">
        <div class="box-body">
            <div class="jumbotron">
                <img src="<?= Yii::$app->homeUrl ?>images/casa.jpg" class="img-circle" alt="Cinque Terre" width="202" height="202">
                <h1><?= Yii::$app->params['nomprog'] ?></h1>
                <?= Html::a('Empezar', ['/metadato/municipio'], ['class' => 'btn btn-lg btn-success']) ?>
            </div>
        </div>
    </div>
</div>
