<?php
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Municipio';
$mun = 1;
?>

<?= Html::beginForm(
    Url::toRoute("metadato/create"),//action
    "get"
);
?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Municipio</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <?=
            Select2::widget([
                'name' => 'mun',
                'data' => ArrayHelper::map($model, 'MUNICIPIOID', 'MUNICIPIONOMBRE'),
                'options' => [
                    'value' => 1,
                    'placeholder' => 'Selecciona un Municipio',
                    'required' => 'true'

                ],
            ])
            ?>
        </div>

        <?= Html::submitInput("Enviar", ["class" => "btn btn-success btn-block"]) ?>

        <?= Html::endForm() ?>
    </div>
    <!-- /.box-body -->
</div>



