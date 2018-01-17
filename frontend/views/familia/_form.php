<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use common\models\Parentesco;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Familia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="familia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PRIMER_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEGUNDO_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CVE_PARENTESCO')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Parentesco::cacheParentesco(), 'CVE_PARENTESCO', 'DESC_PARENTESCO'),
        'options' => ['placeholder' => 'Selecciona un Parentesco'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'FECHA_NACIMIENTO')->widget(MaskedInput::className(), [
        'name' => 'input-31',
        'clientOptions' => ['alias' =>  'date']
    ]) ?>

    <?= $form->field($model, 'SEXO')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>

    <?= $form->field($model, 'CVE_ESTADO_CIVIL')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\EstadoCivil::cacheEstadoCivil(), 'CVE_ESTADO_CIVIL', 'ESTADO_CIVIL'),
        'options' => ['placeholder' => 'Selecciona un grado'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>


    <?= $form->field($model, 'SABELEER')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ASISTE_ESC')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_GRADO_ESTUDIOS')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\GradoEstudio::cacheGrado(), 'CVE_GRADO_ESTUDIOS', 'GRADO_ESTUDIOS'),
        'options' => ['placeholder' => 'Selecciona un grado'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_ACTIVIDAD_LABORAL')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\ActividadLaboral::cacheAL(), 'CVE_ACTIVIDAD_LABORAL', 'ACTIVIDAD_LABORAL'),
        'options' => ['placeholder' => 'Selecciona una Actividad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'FOLIO_ID_OFICIAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'CVE_DISCAPACIDAD')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\common\models\Discapacidad::cacheDisc(), 'CVE_DISCAPACIDAD', 'DESC_DISCAPACIDAD'),
        'options' => ['placeholder' => 'Selecciona una Discapacidad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('GUARDAR INTEGRANTE', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
