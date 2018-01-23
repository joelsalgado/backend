<?php
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\Apartados\Apartados;
$this->title = 'Municipio';
?>
    <?= Html::beginForm(
        Url::toRoute($url = ($id != null) ? "metadato/update" : "metadato/create"),//action
        "get"
    );
    ?>
<div class="box">
    <?=
    Apartados::widget([
            'tipo'=>1,
            'accion' => $accion = ($id != null) ? "u" : "c",
            'apartado' => $apartado2 = ($id != null) ? $apartado : null,
            'id' => $folio2 = ($id != null) ? $id : null,
            'mun' => $mun4 = ($id != null) ? $mun : null,
    ])
    ?>

    <div class="box-header with-border">
        <h3 class="box-title">Municipio</h3>
    </div>
    <div class="box-body">
        <div class="container">
            <div class="row">
                <div class="alert alert-success-alt">
                    <strong>MUNICIPIO</strong> <span class="glyphicon glyphicon-globe"></span>
                </div>
                <div class="form-group">
                    <?php if($id):?>
                    <?= Html::hiddenInput('id', $id); ?>
                    <?php endif; ?>
                    <?=
                    Select2::widget([
                        'name' => 'mun',
                        'data' => ArrayHelper::map($model, 'MUNICIPIOID', 'MUNICIPIONOMBRE'),
                        'value' => $var = ($mun != null) ? $mun : null,
                        'options' => [
                            'placeholder' => 'Selecciona un Municipio',
                            'required' => 'true'
                        ]
                    ]) ?> <br>
                    <?= Html::submitInput("Enviar", ["class" => "btn btn-success btn-block"]) ?>
                </div>
            </div>
        </div>



        <?= Html::endForm() ?>
    </div>
    <!-- /.box-body -->
</div>



