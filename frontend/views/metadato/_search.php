<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MetadatoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="metadato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'N_PERIODO') ?>

    <?= $form->field($model, 'CVE_PROGRAMA') ?>

    <?= $form->field($model, 'FOLIO') ?>

    <?= $form->field($model, 'FOLIO_RELACIONADO') ?>

    <?= $form->field($model, 'CVE_DEPENDENCIA') ?>

    <?php // echo $form->field($model, 'CVE_COORDINACION') ?>

    <?php // echo $form->field($model, 'TIPO_BENEFICIARIO') ?>

    <?php // echo $form->field($model, 'PRIMER_APELLIDO') ?>

    <?php // echo $form->field($model, 'SEGUNDO_APELLIDO') ?>

    <?php // echo $form->field($model, 'NOMBRES') ?>

    <?php // echo $form->field($model, 'NOMBRE_COMPLETO') ?>

    <?php // echo $form->field($model, 'FECHA_NACIMIENTO') ?>

    <?php // echo $form->field($model, 'NUMERO_HIJOS') ?>

    <?php // echo $form->field($model, 'SEXO') ?>

    <?php // echo $form->field($model, 'TP_ID_OFICIAL') ?>

    <?php // echo $form->field($model, 'FOLIO_ID_OFICIAL') ?>

    <?php // echo $form->field($model, 'CVE_ESTADO_CIVIL') ?>

    <?php // echo $form->field($model, 'CVE_GRADO_ESTUDIOS') ?>

    <?php // echo $form->field($model, 'CVE_PARENTESCO') ?>

    <?php // echo $form->field($model, 'CURP') ?>

    <?php // echo $form->field($model, 'RFC') ?>

    <?php // echo $form->field($model, 'CVE_NACIONALIDAD') ?>

    <?php // echo $form->field($model, 'CVE_LUGAR_NACIMIENTO') ?>

    <?php // echo $form->field($model, 'CVE_ACTIVIDAD_LABORAL') ?>

    <?php // echo $form->field($model, 'CVE_SITUACION_LABORAL') ?>

    <?php // echo $form->field($model, 'CALLE') ?>

    <?php // echo $form->field($model, 'NUM_EXT') ?>

    <?php // echo $form->field($model, 'NUM_INT') ?>

    <?php // echo $form->field($model, 'MANZANA') ?>

    <?php // echo $form->field($model, 'LOTE') ?>

    <?php // echo $form->field($model, 'CODIGO_POSTAL') ?>

    <?php // echo $form->field($model, 'SECCION') ?>

    <?php // echo $form->field($model, 'ENTRE_CALLE') ?>

    <?php // echo $form->field($model, 'Y_CALLE') ?>

    <?php // echo $form->field($model, 'OTRA_REFERENCIA') ?>

    <?php // echo $form->field($model, 'LADA_TELEFONO') ?>

    <?php // echo $form->field($model, 'TELEFONO') ?>

    <?php // echo $form->field($model, 'LADA_FAX') ?>

    <?php // echo $form->field($model, 'FAX') ?>

    <?php // echo $form->field($model, 'COLONIA') ?>

    <?php // echo $form->field($model, 'CVE_LOCALIDAD') ?>

    <?php // echo $form->field($model, 'LOCALIDAD') ?>

    <?php // echo $form->field($model, 'AGEB') ?>

    <?php // echo $form->field($model, 'CVE_MUNICIPIO') ?>

    <?php // echo $form->field($model, 'CVE_ENTIDAD_FEDERATIVA') ?>

    <?php // echo $form->field($model, 'CVE_REGION') ?>

    <?php // echo $form->field($model, 'CORREO_ELECTRONICO') ?>

    <?php // echo $form->field($model, 'MISMO_DOMICILIO') ?>

    <?php // echo $form->field($model, 'CVE_RED_SOCIAL') ?>

    <?php // echo $form->field($model, 'RED_SOCIAL') ?>

    <?php // echo $form->field($model, 'LATITUD') ?>

    <?php // echo $form->field($model, 'LONGITUD') ?>

    <?php // echo $form->field($model, 'TIPO_BENEFICIARIO_C') ?>

    <?php // echo $form->field($model, 'PRIMER_APELLIDO_C') ?>

    <?php // echo $form->field($model, 'SEGUNDO_APELLIDO_C') ?>

    <?php // echo $form->field($model, 'NOMBRES_C') ?>

    <?php // echo $form->field($model, 'NOMBRE_COMPLETO_C') ?>

    <?php // echo $form->field($model, 'FECHA_NACIMIENTO_C') ?>

    <?php // echo $form->field($model, 'SEXO_C') ?>

    <?php // echo $form->field($model, 'TP_ID_OFICIAL_C') ?>

    <?php // echo $form->field($model, 'FOLIO_ID_OFICIAL_C') ?>

    <?php // echo $form->field($model, 'CVE_ESTADO_CIVIL_C') ?>

    <?php // echo $form->field($model, 'CVE_GRADO_ESTUDIOS_C') ?>

    <?php // echo $form->field($model, 'CVE_PARENTESCO_C') ?>

    <?php // echo $form->field($model, 'CURP_C') ?>

    <?php // echo $form->field($model, 'RFC_C') ?>

    <?php // echo $form->field($model, 'CVE_NACIONALIDAD_C') ?>

    <?php // echo $form->field($model, 'CVE_LUGAR_NACIMIENTO_C') ?>

    <?php // echo $form->field($model, 'CVE_ACTIVIDAD_LABORAL_C') ?>

    <?php // echo $form->field($model, 'CVE_SITUACION_LABORAL_C') ?>

    <?php // echo $form->field($model, 'MISMO_DOMICILIO_C') ?>

    <?php // echo $form->field($model, 'CALLE_C') ?>

    <?php // echo $form->field($model, 'NUM_EXT_C') ?>

    <?php // echo $form->field($model, 'NUM_INT_C') ?>

    <?php // echo $form->field($model, 'MANZANA_C') ?>

    <?php // echo $form->field($model, 'LOTE_C') ?>

    <?php // echo $form->field($model, 'CODIGO_POSTAL_C') ?>

    <?php // echo $form->field($model, 'SECCION_C') ?>

    <?php // echo $form->field($model, 'ENTRE_CALLE_C') ?>

    <?php // echo $form->field($model, 'Y_CALLE_C') ?>

    <?php // echo $form->field($model, 'OTRA_REFERENCIA_C') ?>

    <?php // echo $form->field($model, 'LADA_TELEFONO_C') ?>

    <?php // echo $form->field($model, 'TELEFONO_C') ?>

    <?php // echo $form->field($model, 'LADA_FAX_C') ?>

    <?php // echo $form->field($model, 'FAX_C') ?>

    <?php // echo $form->field($model, 'COLONIA_C') ?>

    <?php // echo $form->field($model, 'CVE_LOCALIDAD_C') ?>

    <?php // echo $form->field($model, 'LOCALIDAD_C') ?>

    <?php // echo $form->field($model, 'CVE_MUNICIPIO_C') ?>

    <?php // echo $form->field($model, 'CVE_ENTIDAD_FEDERATIVA_C') ?>

    <?php // echo $form->field($model, 'CVE_REGION_C') ?>

    <?php // echo $form->field($model, 'AGEB_C') ?>

    <?php // echo $form->field($model, 'NUMERO_HIJOS_C') ?>

    <?php // echo $form->field($model, 'CORREO_ELECTRONICO_C') ?>

    <?php // echo $form->field($model, 'CVE_RED_SOCIAL_C') ?>

    <?php // echo $form->field($model, 'RED_SOCIAL_C') ?>

    <?php // echo $form->field($model, 'LATITUD_C') ?>

    <?php // echo $form->field($model, 'LONGITUD_C') ?>

    <?php // echo $form->field($model, 'STATUS_1') ?>

    <?php // echo $form->field($model, 'STATUS_2') ?>

    <?php // echo $form->field($model, 'USU') ?>

    <?php // echo $form->field($model, 'PW') ?>

    <?php // echo $form->field($model, 'IP') ?>

    <?php // echo $form->field($model, 'FECHA_REG') ?>

    <?php // echo $form->field($model, 'USU_M') ?>

    <?php // echo $form->field($model, 'PW_M') ?>

    <?php // echo $form->field($model, 'IP_M') ?>

    <?php // echo $form->field($model, 'FECHA_M') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
