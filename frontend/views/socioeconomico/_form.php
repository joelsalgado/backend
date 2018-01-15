<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Socioeconomico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">

    <?php $form = ActiveForm::begin(); ?>
    <div class="alert alert-danger">
        <strong>Datos Socioeconómicos del Solicitante</strong>
    </div>

    <?= $form->field($model, 'ES_JEFA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_PARENTESCO')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($parentesco, 'CVE_PARENTESCO', 'DESC_PARENTESCO'),
        'options' => ['placeholder' => 'Selecciona un Parentesco'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'INDIGENA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'HABLA_LENGUA_I')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_LENGUA')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($lengua, 'CVE_LENGUA', 'DESC_LENGUA'),
        'options' => ['placeholder' => 'Selecciona una Lengua'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_CANT')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($cantidades, 'CVE_CANT', 'DESC_CANT'),
        'options' => ['placeholder' => 'Selecciona una Cantidad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'REPATRIADO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_TIEMPO_RADICAR')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($radicar, 'CVE_TIEMPO_RADICAR', 'DESC_TIEMPO_RADICAR'),
        'options' => ['placeholder' => 'Selecciona una Tiempo'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'ES_VICTIMA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'DELITO_CUAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CVE_ENFERMEDAD')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($enfermedad, 'CVE_ENFERMEDAD', 'DESC_ENFERMEDAD'),
        'options' => ['placeholder' => 'Selecciona una Enfermedad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'EMBARAZADA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'EMBARAZADA_MESES')->textInput() ?>

    <?= $form->field($model, 'CVE_DISCAPACIDAD')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($discapacidad, 'CVE_DISCAPACIDAD', 'DESC_DISCAPACIDAD'),
        'options' => ['placeholder' => 'Selecciona una Discapacidad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_INST_SALUD')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($institucion, 'CVE_INST_SALUD', 'DESC_INST_SALUD'),
        'options' => ['placeholder' => 'Selecciona una Institución'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_ORFANDAD')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($orfandad, 'CVE_ORFANDAD', 'DESC_ORFANDAD'),
        'options' => ['placeholder' => 'Selecciona una opcion'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_GRADO_ESTUDIOS')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($grado, 'CVE_GRADO_ESTUDIOS', 'GRADO_ESTUDIOS'),
        'options' => ['placeholder' => 'Selecciona un grado'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'DESC_CCT')->textInput(['maxlength' => true]) ?>

    <div class="alert alert-danger">
        <strong>Ingreso del Hogar</strong>
    </div>

    <?= $form->field($model, 'TIPO_ZONA')->radioList(['U' => 'Zona Urbana', 'R' => 'Zona Rural']) ?>

    <?= $form->field($model, 'TRABAJA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_TIPO_EMPLEO')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($empleo, 'CVE_TIPO_EMPLEO', 'DESC_TIPO_EMPLEO'),
        'options' => ['placeholder' => 'Selecciona un tipo de empleo'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_ACTIVIDAD_LABORAL')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($actividad, 'CVE_ACTIVIDAD_LABORAL', 'ACTIVIDAD_LABORAL'),
        'options' => ['placeholder' => 'Selecciona una Actividad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_SALARIO')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'ALGUN_INGRESO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ALGUN_INGRESO_TIPO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALGUN_INGRESO_MONTO')->textInput() ?>


    <?= $form->field($model, 'ALQUILER_TERRENO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ALQUILER_TERRENO_MONTO')->textInput() ?>

    <?= $form->field($model, 'PENSION')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'PENSION_MONTO')->textInput() ?>

    <?= $form->field($model, 'CVE_SALARIO2')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_DEPEN_ECONOM')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($dependientes, 'CVE_DEPEN_ECONOM', 'DESC_DEPEN_ECONOM'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_PARENTESCO2')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($parentesco, 'CVE_PARENTESCO', 'DESC_PARENTESCO'),
        'options' => ['placeholder' => 'Selecciona un Parentesco'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'RECIBE_APOYO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CUANTOS_APOYOS')->textInput() ?>

    <?= $form->field($model, 'CUAL_APOYO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CVE_CANT2')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($cantidades, 'CVE_CANT', 'DESC_CANT'),
        'options' => ['placeholder' => 'Selecciona una Cantidad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="alert alert-danger">
        <strong>Ingreso de la Mujer</strong>
    </div>

    <?= $form->field($model, 'TIPO_ZONA2')->radioList(['U' => 'Zona Urbana', 'R' => 'Zona Rural']) ?>

    <?= $form->field($model, 'CVE_ACTIVIDAD')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($actividad2, 'CVE_ACTIVIDAD', 'DESC_ACTIVIDAD'),
        'options' => ['placeholder' => 'Selecciona una Actividad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_REALIZA_ACTIVIDAD')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($realizaA, 'CVE_REALIZA_ACTIVIDAD', 'DESC_REALIZA_ACTIVIDAD'),
        'options' => ['placeholder' => 'Selecciona una Opcion'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'ACTIVIDAD_FUE')->radioList(['R' => 'Remunerada', 'N' => 'No Remunerada']) ?>

    <?= $form->field($model, 'CVE_SALARIO3')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="alert alert-danger">
        <strong>Ingreso del Joven</strong>
    </div>

    <?= $form->field($model, 'TIPO_ZONA3')->radioList(['U' => 'Zona Urbana', 'R' => 'Zona Rural']) ?>

    <?= $form->field($model, 'TRABAJA2')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_SALARIO4')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'ESTUDIA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'RECIBE_INGRESO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_SALARIO5')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'BECA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_PER_INGRESO')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($pering, 'CVE_PER_INGRESO', 'DESC_PER_INGRESO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'MONTO_BECA')->textInput() ?>

    <?= $form->field($model, 'MONTO_TRANSPORTE')->textInput() ?>

    <?= $form->field($model, 'CVE_TIEMPO')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($tiempo, 'CVE_TIEMPO', 'DESC_TIEMPO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="alert alert-danger">
        <strong>Alimentación</strong>
    </div>

    <?= $form->field($model, 'CVE_CANT3')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($cantidades, 'CVE_CANT', 'DESC_CANT'),
        'options' => ['placeholder' => 'Selecciona una Cantidad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'COMPARTEN_GASTOS')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ADULTO_SINCOMIDA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ADULTO_SINTIOHAMBRE')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'MENOR_PVA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ADULTO_COMIO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ADULTO_PVA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'LIMOSNA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ADULTO_SINCENAR')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'MENOR_COMIO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'ADULTO_COMIOMENOS')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'MENOR_COMIOMENOS')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'MENOR_SINTIOHAMBRE')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'MENOR_MENOSCOMIDA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'MENOR_ACOSTARHAMBRE')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <div class="alert alert-danger">
        <strong>Caracteristicas de la vivienda</strong>
    </div>

    <?= $form->field($model, 'CVE_CASADONDEVIVE_ES')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($casadonde, 'CVE_CASADONDEVIVE_ES', 'DESC_CASADONDEVIVE_ES'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_MATERIAL')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($material, 'CVE_MATERIAL', 'DESC_MATERIAL'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_MATERIAL2')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($material, 'CVE_MATERIAL', 'DESC_MATERIAL'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_MATERIAL3')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($material, 'CVE_MATERIAL', 'DESC_MATERIAL'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CUARTOS')->textInput() ?>

    <?= $form->field($model, 'CUARTOS_DORMIR')->textInput() ?>

    <?= $form->field($model, 'CVE_SERVICIO_AGUA')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($servicioAgua, 'CVE_SERVICIO', 'DESC_SERVICIO'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'EXCUSADO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'SANITARIO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CVE_SERVICIO_SANDREN')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($sandren, 'CVE_SERVICIO_SANDREN', 'DESC_SERVICIO_SANDREN'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_SERVICIO_SANDREN2')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($sandren, 'CVE_SERVICIO_SANDREN', 'DESC_SERVICIO_SANDREN'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_SERVICIO_SANDREN3')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($sandren, 'CVE_SERVICIO_SANDREN', 'DESC_SERVICIO_SANDREN'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_SERVICIO_LUZ')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($servluz, 'CVE_SERVICIO_LUZ', 'DESC_SERVICIO_LUZ'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_COMBUSTIBLE')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($combustible, 'CVE_COMBUSTIBLE', 'DESC_COMBUSTIBLE'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'FOGON')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <label> Esta vivienda cuenta con...</label>

    <?= $form->field($model, 'LAVADERO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'TARJA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'REGADERA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'TINACO')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CISTERNA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'PILETA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CALENTADOR_SOLAR')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CALENTADOR_GAS')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'MEDIDOR_LUZ')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'BOMBA_AGUA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'TANQUE_GAS')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'AIRE_ACOND')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <?= $form->field($model, 'CALEFACCION')->radioList(['S' => 'Si', 'N' => 'No']) ?>


    <?= $form->field($model, 'CVE_CANT4')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($cantidades, 'CVE_CANT', 'DESC_CANT'),
        'options' => ['placeholder' => 'Selecciona una Cantidad'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'CVE_CASADONDEVIVE_ES2')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($casadonde, 'CVE_CASADONDEVIVE_ES', 'DESC_CASADONDEVIVE_ES'),
        'options' => ['placeholder' => 'Selecciona una Opción'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'AFECTADA')->radioList(['S' => 'Si', 'N' => 'No']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?=$this->registerJsFile(
    '@web/frontend/assets/js/solrResult.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);?>
