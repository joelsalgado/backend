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
    <div CLASS="row">
        <div class="row">
            <div class="alert alert-success-alt">
                <strong><font style="text-transform: uppercase;">Datos Socioeconómicos del Solicitante</font></strong>
                <span class="glyphicon glyphicon-duplicate"></span>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'ES_JEFA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="JEFA">
                <div class="col-sm-4">
                    <div class="form-group">

                        <?= $form->field($model, 'CVE_PARENTESCO')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($parentesco, 'CVE_PARENTESCO', 'DESC_PARENTESCO'),
                            'options' => ['placeholder' => 'Selecciona un Parentesco'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'INDIGENA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'HABLA_LENGUA_I')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="LENGUA">
                <div class="col-sm-3">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_LENGUA')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($lengua, 'CVE_LENGUA', 'DESC_LENGUA'),
                            'options' => ['placeholder' => 'Selecciona una Lengua'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_CANT')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($cantidades, 'CVE_CANT', 'DESC_CANT'),
                        'options' => ['placeholder' => 'Selecciona una Cantidad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'REPATRIADO')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_TIEMPO_RADICAR')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($radicar, 'CVE_TIEMPO_RADICAR', 'DESC_TIEMPO_RADICAR'),
                        'options' => ['placeholder' => 'Selecciona una Tiempo'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'ES_VICTIMA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="DELITO">
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $form->field($model, 'DELITO_CUAL')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_ENFERMEDAD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($enfermedad, 'CVE_ENFERMEDAD', 'DESC_ENFERMEDAD'),
                        'options' => ['placeholder' => 'Selecciona una Enfermedad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'EMBARAZADA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="EMBARAZADA">
                <div class="col-sm-4">
                    <div class="form-group">

                        <?= $form->field($model, 'EMBARAZADA_MESES')->textInput() ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_DISCAPACIDAD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($discapacidad, 'CVE_DISCAPACIDAD', 'DESC_DISCAPACIDAD'),
                        'options' => ['placeholder' => 'Selecciona una Discapacidad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_INST_SALUD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($institucion, 'CVE_INST_SALUD', 'DESC_INST_SALUD'),
                        'options' => ['placeholder' => 'Selecciona una Institución'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_ORFANDAD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($orfandad, 'CVE_ORFANDAD', 'DESC_ORFANDAD'),
                        'options' => ['placeholder' => 'Selecciona una opcion'],
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
                    <?= $form->field($model, 'CVE_GRADO_ESTUDIOS')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($grado, 'CVE_GRADO_ESTUDIOS', 'GRADO_ESTUDIOS'),
                        'options' => ['placeholder' => 'Selecciona un grado'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'DESC_CCT')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="alert alert-success-alt">
            <strong><font style="text-transform: uppercase;">Ingreso del Hogar</font></strong>
            <span class="glyphicon glyphicon-usd"></span>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'TIPO_ZONA')->radioList(['U' => 'Zona Urbana', 'R' => 'Zona Rural']) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'TRABAJA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="SITRABAJA">
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_TIPO_EMPLEO')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($empleo, 'CVE_TIPO_EMPLEO', 'DESC_TIPO_EMPLEO'),
                            'options' => ['placeholder' => 'Selecciona un tipo de empleo'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_ACTIVIDAD_LABORAL')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($actividad, 'CVE_ACTIVIDAD_LABORAL', 'ACTIVIDAD_LABORAL'),
                            'options' => ['placeholder' => 'Selecciona una Actividad'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_SALARIO')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
                            'options' => ['placeholder' => 'Selecciona una Opción'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="NOTRABAJA">
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $form->field($model, 'ALGUN_INGRESO')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                    </div>
                </div>
                <div class="INGRESO">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'ALGUN_INGRESO_TIPO')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'ALGUN_INGRESO_MONTO')->textInput() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'ALQUILER_TERRENO')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="ALQUILER">
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $form->field($model, 'ALQUILER_TERRENO_MONTO')->textInput() ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <?= $form->field($model, 'PENSION')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="PENSION">
                <div class="col-sm-2">
                    <div class="form-group">
                        <?= $form->field($model, 'PENSION_MONTO')->textInput() ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_SALARIO2')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_DEPEN_ECONOM')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($dependientes, 'CVE_DEPEN_ECONOM', 'DESC_DEPEN_ECONOM'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_PARENTESCO2')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($parentesco, 'CVE_PARENTESCO', 'DESC_PARENTESCO'),
                        'options' => ['placeholder' => 'Selecciona un Parentesco'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    <?= $form->field($model, 'RECIBE_APOYO')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="APOYOS">
                <div class="col-sm-2">
                    <div class="form-group">
                        <?= $form->field($model, 'CUANTOS_APOYOS')->textInput() ?>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <?= $form->field($model, 'CUAL_APOYO')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_CANT2')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($cantidades, 'CVE_CANT', 'DESC_CANT'),
                        'options' => ['placeholder' => 'Selecciona una Cantidad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="alert alert-success-alt">
            <strong><font style="text-transform: uppercase;">Ingreso de la Mujer</font></strong>
            <i class="fa fa-female" aria-hidden="true"></i>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'TIPO_ZONA2')->radioList(['U' => 'Zona Urbana', 'R' => 'Zona Rural']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_ACTIVIDAD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($actividad2, 'CVE_ACTIVIDAD', 'DESC_ACTIVIDAD'),
                        'options' => ['placeholder' => 'Selecciona una Actividad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_REALIZA_ACTIVIDAD')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($realizaA, 'CVE_REALIZA_ACTIVIDAD', 'DESC_REALIZA_ACTIVIDAD'),
                        'options' => ['placeholder' => 'Selecciona una Opcion'],
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
                    <?= $form->field($model, 'ACTIVIDAD_FUE')->radioList(['R' => 'Remunerada', 'N' => 'No Remunerada']) ?>
                </div>
            </div>
            <div class="REMUNERADA">
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_SALARIO3')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
                            'options' => ['placeholder' => 'Selecciona una Opción'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="alert alert-success-alt">
            <strong><font style="text-transform: uppercase;">Ingreso del Joven</font></strong>
            <i class="fa fa-male" aria-hidden="true"></i>

        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'TIPO_ZONA3')->radioList(['U' => 'Zona Urbana', 'R' => 'Zona Rural']) ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'TRABAJA2')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="TRABAJO2">
                <div class="col-sm-3">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_SALARIO4')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
                            'options' => ['placeholder' => 'Selecciona una Opción'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <?= $form->field($model, 'ESTUDIA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'RECIBE_INGRESO')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="INGRESOJEFE">
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_SALARIO5')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($salario, 'CVE_SALARIO', 'DESC_SALARIO'),
                            'options' => ['placeholder' => 'Selecciona una Opción'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="ESTUDIA">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $form->field($model, 'BECA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                    </div>
                </div>
                <div class="BECA">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'CVE_PER_INGRESO')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map($pering, 'CVE_PER_INGRESO', 'DESC_PER_INGRESO'),
                                'options' => ['placeholder' => 'Selecciona una Opción'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]) ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'MONTO_BECA')->textInput() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $form->field($model, 'MONTO_TRANSPORTE')->textInput() ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $form->field($model, 'CVE_TIEMPO')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($tiempo, 'CVE_TIEMPO', 'DESC_TIEMPO'),
                            'options' => ['placeholder' => 'Selecciona una Opción'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="alert alert-success-alt">
            <strong><font style="text-transform: uppercase;">ALIMENTACIÓN</font></strong>
            <span class="glyphicon glyphicon-apple"></span>
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
    </div>
    <div class="row">
        <div class="alert alert-success-alt">
            <strong><font style="text-transform: uppercase;">Caracteristicas de la vivienda</font></strong>
            <span class="glyphicon glyphicon-home"></span>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_CASADONDEVIVE_ES')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($casadonde, 'CVE_CASADONDEVIVE_ES', 'DESC_CASADONDEVIVE_ES'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_MATERIAL')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($material, 'CVE_MATERIAL', 'DESC_MATERIAL'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
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
                    <?= $form->field($model, 'CVE_MATERIAL2')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($material, 'CVE_MATERIAL', 'DESC_MATERIAL'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_MATERIAL3')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($material, 'CVE_MATERIAL', 'DESC_MATERIAL'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
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
                    <?= $form->field($model, 'CUARTOS')->textInput() ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CUARTOS_DORMIR')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_SERVICIO_AGUA')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($servicioAgua, 'CVE_SERVICIO', 'DESC_SERVICIO'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'EXCUSADO')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SANITARIO')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_SERVICIO_SANDREN')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($sandren, 'CVE_SERVICIO_SANDREN', 'DESC_SERVICIO_SANDREN'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_SERVICIO_SANDREN2')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($sandren, 'CVE_SERVICIO_SANDREN', 'DESC_SERVICIO_SANDREN'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_SERVICIO_SANDREN3')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($sandren, 'CVE_SERVICIO_SANDREN', 'DESC_SERVICIO_SANDREN'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
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
                    <?= $form->field($model, 'CVE_SERVICIO_LUZ')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($servluz, 'CVE_SERVICIO_LUZ', 'DESC_SERVICIO_LUZ'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_COMBUSTIBLE')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($combustible, 'CVE_COMBUSTIBLE', 'DESC_COMBUSTIBLE'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'FOGON')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
        </div>


        <label> Esta vivienda cuenta con...</label>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'LAVADERO')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'TARJA')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'REGADERA')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'TINACO')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'CISTERNA')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'PILETA')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'CALENTADOR_SOLAR')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'CALENTADOR_GAS')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'MEDIDOR_LUZ')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'BOMBA_AGUA')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'TANQUE_GAS')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'AIRE_ACOND')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?= $form->field($model, 'CALEFACCION')->checkbox(['value' => 'S', 'uncheckValue'=>'N']) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_CANT4')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($cantidades, 'CVE_CANT', 'DESC_CANT'),
                        'options' => ['placeholder' => 'Selecciona una Cantidad'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_CASADONDEVIVE_ES2')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map($casadonde, 'CVE_CASADONDEVIVE_ES', 'DESC_CASADONDEVIVE_ES'),
                        'options' => ['placeholder' => 'Selecciona una Opción'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <?= $form->field($model, 'AFECTADA')->radioList(['S' => 'Si', 'N' => 'No']) ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<?=$this->registerJsFile(
    '@web/frontend/assets/js/socioeconomico.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);?>
