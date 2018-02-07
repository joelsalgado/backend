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
                Yii::$app->homeUrl."images/docs/".$model->FOLIO."/".$model->DOCTO_1,
            ],
            'initialPreviewAsData'=>true,
            'initialPreviewConfig' => [
                ['type' => "pdf", 'caption' => $model->DOCTO_1,
                    'url' => Yii::$app->homeUrl."images/docs/".$model->FOLIO."/", 'key' => 10, 'downloadUrl'=> false],
            ],
            'initialPreviewShowDelete' => false,
            'showCaption' => true,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'maxFileSize'=>Yii::$app->params['sizeImg'],
            'browseLabel' =>  ''
        ],
        'options' => ['multiple' => false],
    ])  ?>

    <?= $form->field($model, 'imageTemp2')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                Yii::$app->homeUrl."images/docs/".$model->FOLIO."/".$model->DOCTO_2,
            ],
            'initialPreviewConfig' => [
                ['type' => "pdf", 'caption' => $model->DOCTO_2,
                    'url' => Yii::$app->homeUrl."images/docs/".$model->FOLIO."/", 'key' => 10, 'downloadUrl'=> false],
            ],
            'initialPreviewAsData'=>true,
            'initialPreviewShowDelete' => false,
            'showCaption' => true,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'maxFileSize'=>Yii::$app->params['sizeImg'],
            'browseLabel' =>  ''
        ],
        'options' => ['multiple' => false],
    ])  ?>

    <?= $form->field($model, 'imageTemp3')->widget(FileInput::classname(), [
            'pluginOptions' => [
                'initialPreview'=>[
                    Yii::$app->homeUrl."images/docs/".$model->FOLIO."/".$model->DOCTO_3,
                ],
                'initialPreviewAsData'=>true,
                'initialPreviewShowDelete' => false,
                'initialPreviewConfig' => [
                        ['type' => "pdf", 'caption' => $model->DOCTO_3,
                            'url' => Yii::$app->homeUrl."images/docs/".$model->FOLIO."/", 'key' => 10, 'downloadUrl'=> false],
                ],
                'showCaption' => true,
                'showRemove' => false,
                'showUpload' => false,
                'browseClass' => 'btn btn-primary btn-block',
                'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                'maxFileSize'=>Yii::$app->params['sizeImg'],
                'browseLabel' =>  ''
            ],
        'options' => ['multiple' => false],
    ])  ?>

    <?= $form->field($model, 'imageTemp4')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview'=>[
                Yii::$app->homeUrl."images/docs/".$model->FOLIO."/".$model->DOCTO_4,
            ],
            'initialPreviewConfig' => [
                ['type' => "pdf", 'caption' => $model->DOCTO_4,
                    'url' => Yii::$app->homeUrl."images/docs/".$model->FOLIO."/", 'key' => $model->FOLIO, 'downloadUrl'=> false],
            ],
            'initialPreviewAsData'=>true,
            'initialPreviewShowDelete' => false,
            'showCaption' => true,
            'showRemove' => false,
            'showUpload' => false,
            'browseClass' => 'btn btn-primary btn-block',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'maxFileSize'=>Yii::$app->params['sizeImg'],
            'browseLabel' =>  ''
        ],
        'options' => ['multiple' => false],
    ])  ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
