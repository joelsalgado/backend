<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Metadato */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <div class="alert alert-danger">
        <strong>IDENTIFICACIÓN GEOGRÁFICA</strong>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <?= $form->field($model, 'CVE_ENTIDAD_FEDERATIVA')->textInput(['value'=> 15, 'readonly' => 'true']) ?>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <?= $form->field($model, 'CVE_MUNICIPIO')->textInput(['value'=> $mun, 'readonly' => 'true']) ?>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
            <?= $form->field($model, 'CVE_LOCALIDAD')->widget(Select2::classname(), [
                'data' => ArrayHelper::map($loc, 'CVE_LOCALIDAD', 'DESC_LOCALIDAD'),
                'options' => ['placeholder' => 'Selecciona una Localidad'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
            <?= $form->field($model, 'AGEB')->widget(Select2::classname(), [
                'data' => ArrayHelper::map($ageb, 'AGEB_ID', 'AGEB_ID'),
                'options' => ['placeholder' => 'Selecciona AGEB'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <?= $form->field($model, 'MANZANA')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <?= $form->field($model, 'LOTE')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-sm-4"> </div>
    </div>
    <div class="alert alert-danger">
        <strong>DIRECCIÓN DE VIVIENDA!</strong>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <?= $form->field($model, 'CALLE')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <?= $form->field($model, 'COLONIA')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <?= $form->field($model, 'NUM_EXT')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <?= $form->field($model, 'NUM_INT')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <?= $form->field($model, 'CODIGO_POSTAL')->textInput() ?>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <?= $form->field($model, 'OTRA_REFERENCIA')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="alert alert-danger">
        <strong>DATOS PERSONALES!</strong>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <?= $form->field($model, 'PRIMER_APELLIDO')->textInput(['maxlength' => true, 'style'=>'text-transform:uppercase;']) ?>
            </div>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'SEGUNDO_APELLIDO')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'SEXO')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'FECHA_NACIMIENTO')->widget(MaskedInput::className(), [
                'name' => 'input-31',
                'clientOptions' => ['alias' =>  'date']
            ]) ?>
        </div>

        <div class="col-sm-4">
            <?= $form->field($model, 'RFC')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-4">
            <?= $form->field($model, 'CVE_NACIONALIDAD')->widget(Select2::classname(), [
                'data' => ArrayHelper::map($nac, 'CVE_NACIONALIDAD', 'DESC_NACIONALIDAD'),
                'options' => ['placeholder' => 'Selecciona una Nacionalidad'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>

        <div class="col-sm-12">
            <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'TP_ID_OFICIAL')->widget(Select2::classname(), [
                'data' => ArrayHelper::map($doc, 'CVE_DOCUMENTO', 'DESC_DOCUMENTO'),
                'options' => ['placeholder' => 'Selecciona una Nacionalidad'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'FOLIO_ID_OFICIAL')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'FAX')->textInput(['maxlength' => true]) ?>
        </div>



        <div class="col-sm-6">
            <?= $form->field($model, 'CORREO_ELECTRONICO')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'CVE_LUGAR_NACIMIENTO')->widget(Select2::classname(), [
                'data' => ArrayHelper::map($nacim, 'CVE_ENTIDAD_FEDERATIVA', 'ENTIDAD_FEDERATIVA'),
                'options' => ['placeholder' => 'Selecciona una Entidad'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>


    </div>
</div>
<div class="metadato-form">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



