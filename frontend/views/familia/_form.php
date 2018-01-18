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

<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="row">
            <div class="alert alert-success-alt">
                <strong><font style="text-transform: uppercase;">INTEGRANTES DEL HOGAR (EMPEZANDO POR EL JEFE(A) DEL HOGAR)</font></strong>
                <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'PRIMER_APELLIDO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEGUNDO_APELLIDO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_PARENTESCO')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(Parentesco::cacheParentesco(),
                            'CVE_PARENTESCO', 'DESC_PARENTESCO'),
                        'options' => ['placeholder' => 'Selecciona un Parentesco'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'FECHA_NACIMIENTO')->widget(MaskedInput::className(), [
                        'name' => 'input-31',
                        'clientOptions' => ['alias' =>  'date']
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'SEXO')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_ESTADO_CIVIL')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\EstadoCivil::cacheEstadoCivil(),
                            'CVE_ESTADO_CIVIL', 'ESTADO_CIVIL'),
                        'options' => ['placeholder' => 'Selecciona un grado'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'SABELEER')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'ASISTE_ESC')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_GRADO_ESTUDIOS')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\GradoEstudio::cacheGrado(),
                            'CVE_GRADO_ESTUDIOS', 'GRADO_ESTUDIOS'),
                        'options' => ['placeholder' => 'Selecciona un grado'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_ACTIVIDAD_LABORAL')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\ActividadLaboral::cacheAL(), 'CVE_ACTIVIDAD_LABORAL', 'ACTIVIDAD_LABORAL'),
                        'options' => ['placeholder' => 'Selecciona una Actividad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'FOLIO_ID_OFICIAL')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_DISCAPACIDAD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\Discapacidad::cacheDisc(), 'CVE_DISCAPACIDAD', 'DESC_DISCAPACIDAD'),
                        'options' => ['placeholder' => 'Selecciona una Discapacidad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('GUARDAR INTEGRANTE', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
        <?php ActiveForm::end(); ?>


</div>
