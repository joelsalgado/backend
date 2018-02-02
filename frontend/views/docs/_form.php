<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Docs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="docs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imageTemp')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                Yii::$app->homeUrl."images/ACTA/".$model->DOCTO_1,
            ],
            'initialPreviewAsData'=>true,
            'showCaption' => true,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            //'maxFileSize'=>Yii::$app->params['sizeImg'],
            'browseLabel' =>  ''
        ],
        'options' => ['accept' => 'image/*'],
    ])  ?>

    <?= $form->field($model, 'imageTemp2')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                Yii::$app->homeUrl."images/CURP/".$model->DOCTO_2,
            ],
            'initialPreviewAsData'=>true,
            'showCaption' => true,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            //'maxFileSize'=>Yii::$app->params['sizeImg'],
            'browseLabel' =>  ''
        ],
        'options' => ['accept' => 'image/*'],
    ])  ?>

    <?= $form->field($model, 'DOCTO_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOCTO_4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
