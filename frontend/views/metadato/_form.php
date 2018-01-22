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
    <div class="row">
        <div class="alert alert-success-alt">
            <strong>IDENTIFICACIÓN GEOGRÁFICA  </strong><span class="glyphicon glyphicon-globe"></span>
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
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SECCION')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($sec, 'SECCION', 'SECCION'),
                        'options' => ['placeholder' => 'Selecciona una Sección'],
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
        </div>
    </div>
    <div class="row">
        <div class="alert alert-success-alt">
            <strong>DIRECCIÓN DE VIVIENDA </strong> <span class="glyphicon glyphicon-home"></span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <?= $form->field($model, 'CALLE')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
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

            <div class="col-sm-8">
                <div class="form-group">
                    <?= $form->field($model, 'COLONIA')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'CODIGO_POSTAL')->textInput() ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'ENTRE_CALLE')->textInput() ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'Y_CALLE')->textInput() ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'OTRA_REFERENCIA')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="alert alert-success-alt">
            <strong>DATOS PERSONALES </strong> <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'PRIMER_APELLIDO')->textInput(['maxlength' => true, 'style'=>'text-transform:uppercase;']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEGUNDO_APELLIDO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'SEXO')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>
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

            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_ESTADO_CIVIL')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\EstadoCivil::cacheEstadoCivil(),
                            'CVE_ESTADO_CIVIL', 'ESTADO_CIVIL'),
                        'options' => ['placeholder' => 'Selecciona una opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_NACIONALIDAD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($nac, 'CVE_NACIONALIDAD', 'DESC_NACIONALIDAD'),
                        'options' => ['value' => 126, 'placeholder' => 'Selecciona una Nacionalidad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'RFC')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'TP_ID_OFICIAL')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($doc, 'CVE_DOCUMENTO', 'DESC_DOCUMENTO'),
                        'options' => ['placeholder' => 'Selecciona una Nacionalidad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'FOLIO_ID_OFICIAL')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'FAX')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CORREO_ELECTRONICO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
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
                <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>




