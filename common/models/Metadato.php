<?php

namespace common\models;

use Yii;

class Metadato extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'FURWEB_METADATO_150';
    }

    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA', 'NUMERO_HIJOS', 'TP_ID_OFICIAL', 'CVE_ESTADO_CIVIL', 'CVE_GRADO_ESTUDIOS', 'CVE_PARENTESCO', 'CVE_NACIONALIDAD', 'CVE_LUGAR_NACIMIENTO', 'CVE_ACTIVIDAD_LABORAL', 'CVE_SITUACION_LABORAL', 'SECCION', 'CVE_LOCALIDAD', 'CVE_MUNICIPIO', 'CVE_ENTIDAD_FEDERATIVA', 'CVE_REGION', 'LATITUD', 'LONGITUD', 'TP_ID_OFICIAL_C', 'CVE_ESTADO_CIVIL_C', 'CVE_GRADO_ESTUDIOS_C', 'CVE_PARENTESCO_C', 'CVE_NACIONALIDAD_C', 'CVE_LUGAR_NACIMIENTO_C', 'CVE_ACTIVIDAD_LABORAL_C', 'CVE_SITUACION_LABORAL_C', 'SECCION_C', 'CVE_MUNICIPIO_C', 'CVE_ENTIDAD_FEDERATIVA_C', 'CVE_REGION_C', 'LATITUD_C', 'LONGITUD_C'], 'number'],
            [['FOLIO', 'PRIMER_APELLIDO', 'NOMBRES', 'SEXO', 'FECHA_NACIMIENTO', 'CVE_NACIONALIDAD', 'CURP', 'TELEFONO', 'CVE_LUGAR_NACIMIENTO', 'CODIGO_POSTAL', 'OTRA_REFERENCIA', 'CVE_LOCALIDAD', 'AGEB', 'CALLE', 'COLONIA', 'CVE_ESTADO_CIVIL', 'CORREO_ELECTRONICO', 'CODIGO_POSTAL', 'SECCION'], 'required', 'message' => 'Campo Obligatorio'],
            [['FOLIO', 'CODIGO_POSTAL', 'CODIGO_POSTAL_C', 'CVE_LOCALIDAD_C', 'NUMERO_HIJOS_C'], 'integer', 'message' => 'Debe ser un numero entero'],
            [['FECHA_NACIMIENTO', 'FECHA_NACIMIENTO_C', 'FECHA_REG', 'FECHA_M'], 'string'],
            [['CODIGO_POSTAL'], 'match', 'pattern' => '/[0-9]{5}/', 'message' => 'Deben ser 5 digitos'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['CVE_DEPENDENCIA', 'CVE_COORDINACION'], 'string', 'max' => 10],
            [['TIPO_BENEFICIARIO', 'SEXO', 'MISMO_DOMICILIO', 'TIPO_BENEFICIARIO_C', 'SEXO_C', 'MISMO_DOMICILIO_C', 'STATUS_1', 'STATUS_2'], 'string', 'max' => 1],
            [['PRIMER_APELLIDO', 'SEGUNDO_APELLIDO', 'NOMBRES', 'CALLE', 'ENTRE_CALLE', 'Y_CALLE', 'COLONIA', 'PRIMER_APELLIDO_C', 'SEGUNDO_APELLIDO_C', 'NOMBRES_C', 'CALLE_C', 'ENTRE_CALLE_C', 'Y_CALLE_C', 'COLONIA_C', 'USU', 'PW', 'IP', 'USU_M', 'PW_M', 'IP_M'], 'string', 'max' => 80],
            [['NOMBRE_COMPLETO', 'OTRA_REFERENCIA', 'CVE_RED_SOCIAL', 'RED_SOCIAL', 'NOMBRE_COMPLETO_C', 'OTRA_REFERENCIA_C', 'CVE_RED_SOCIAL_C', 'RED_SOCIAL_C'], 'string', 'max' => 100],
            [['FOLIO_ID_OFICIAL', 'TELEFONO', 'FAX', 'FOLIO_ID_OFICIAL_C', 'TELEFONO_C', 'FAX_C'], 'string', 'max' => 20],
            [['CURP', 'RFC', 'CURP_C', 'RFC_C'], 'string', 'max' => 18],
            [['NUM_EXT', 'NUM_INT', 'MANZANA', 'LOTE', 'NUM_EXT_C', 'NUM_INT_C', 'MANZANA_C', 'LOTE_C'], 'string', 'max' => 40],
            [['LADA_TELEFONO', 'LADA_FAX', 'LADA_TELEFONO_C', 'LADA_FAX_C'], 'string', 'max' => 3],
            [['LOCALIDAD', 'LOCALIDAD_C'], 'string', 'max' => 150],
            [['AGEB', 'AGEB_C'], 'string', 'max' => 15],
            [['CORREO_ELECTRONICO', 'CORREO_ELECTRONICO_C'], 'string', 'max' => 60],
            [['FECHA_NACIMIENTO'],'date', 'format'=>'dd/mm/yyyy', 'message' => 'Formato no valido'],
            ['CORREO_ELECTRONICO','email', 'message' => 'Formato no valido'],
            [['PRIMER_APELLIDO','SEGUNDO_APELLIDO', 'NOMBRES'], 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
            [['CURP'], 'match', 'pattern' => '/[A-Z]{4}\d{6}[HM][A-Z]{2}[B-DF-HJ-NP-TV-Z]{3}[A-Z0-9][0-9]/', 'message' => 'Formato no valido'],
            ['CURP', 'match', 'pattern' => '/^.{1,18}$/', 'message' => 'Tiene que tener 18 caracteres'],
            ['CURP', 'validateCurp'],
            ['RFC', 'validateRfc'],
            ['FECHA_NACIMIENTO', 'validateFecha'],
            ['FOLIO_ID_OFICIAL', 'validateCVE'],

        ];
    }

    public function validateCurp()
    {
        $fecha = $this->FECHA_NACIMIENTO;
        $curp = $this->CURP;
        $sexo = $this->SEXO;
        $entFed = EntidadFederativa::findOne($this->CVE_LUGAR_NACIMIENTO);
        $ent = $entFed->ABREVIACION_ENTIDAD;

        $fecha_esp = str_replace("/", "", $fecha);
        $dia     = substr($fecha_esp, 0, 2);
        $mes     = substr($fecha_esp, 2, 2);
        $anio     = substr($fecha_esp, 6, 2);

        $fechaCurp = substr($curp, 4, 6);
        $sexoCurp = substr($curp, 10, 1);
        $entCurp = substr($curp, 11, 2);
        $armada = $anio.$mes.$dia;

        if ($fechaCurp != $armada){
            $this->addError('CURP', 'El CURP no corrresponde a tu fecha de nacimiento.');
        }

        if ($sexo != $sexoCurp){
            $this->addError('CURP', 'El CURP no corrresponde a tu Sexo.');
        }

        if ($ent != $entCurp){
            $this->addError('CURP', 'El CURP no corrresponde a tu Entidad de Nacimiento.');
        }

    }


    public function validateRfc()
    {
        $fecha = $this->FECHA_NACIMIENTO;
        $curp = $this->CURP;
        $rfc = $this->RFC;

        $fecha_esp = str_replace("/", "", $fecha);
        $dia     = substr($fecha_esp, 0, 2);
        $mes     = substr($fecha_esp, 2, 2);
        $anio     = substr($fecha_esp, 6, 2);

        $fechaRfc = substr($rfc, 4, 6);
        $rfc10 = substr($rfc, 0, 10);
        $curp10 = substr($curp, 0, 10);
        $armada = $anio.$mes.$dia;

        if ($fechaRfc != $armada){
            $this->addError('RFC', 'El RFC no corrresponde a tu fecha de nacimiento.');
        }

        if ($rfc10 != $curp10){
            $this->addError('RFC', 'El RFC no corrresponde con tu CURP.');
        }
    }

    public function validateCVE()
    {
        if($this->TP_ID_OFICIAL == 2){
            $fecha = $this->FECHA_NACIMIENTO;
            $cve = $this->FOLIO_ID_OFICIAL;
            $sexo = $this->SEXO;
            $ent = $this->CVE_LUGAR_NACIMIENTO;

            $fecha_esp = str_replace("/", "", $fecha);
            $dia     = substr($fecha_esp, 0, 2);
            $mes     = substr($fecha_esp, 2, 2);
            $anio     = substr($fecha_esp, 6, 2);

            $fechaCve = substr($cve, 6, 6);
            $entCve = substr($cve, 12, 2);
            $sexoCve = substr($cve, 14, 1);
            $armada = $anio.$mes.$dia;

            if ($fechaCve != $armada){
                $this->addError('FOLIO_ID_OFICIAL', 'Clave de Elector no corrresponde a tu fecha de nacimiento.');
            }

            if ($sexo != $sexoCve){
                $this->addError('FOLIO_ID_OFICIAL', 'Clave de Elector no corrresponde a tu Sexo.');
            }

            if ($ent != $entCve){
                $this->addError('FOLIO_ID_OFICIAL', 'Clave de Elector no corrresponde a tu Entidad de Nacimiento.');
            }
        }
        if($this->TP_ID_OFICIAL == 1){
            $fecha2 = $this->FECHA_NACIMIENTO;
            $curp2 = $this->CURP;
            $rfc2 = $this->FOLIO_ID_OFICIAL;

            $fecha_esp2 = str_replace("/", "", $fecha2);
            $dia2     = substr($fecha_esp2, 0, 2);
            $mes2     = substr($fecha_esp2, 2, 2);
            $anio2     = substr($fecha_esp2, 6, 2);

            $fechaRfc2 = substr($rfc2, 4, 6);
            $rfc102 = substr($rfc2, 0, 10);
            $curp102 = substr($curp2, 0, 10);
            $armada2 = $anio2.$mes2.$dia2;

            if ($fechaRfc2 != $armada2){
                $this->addError('FOLIO_ID_OFICIAL', 'El RFC no corrresponde a tu fecha de nacimiento.');
            }

            if ($rfc102 != $curp102){
                $this->addError('FOLIO_ID_OFICIAL', 'El RFC no corrresponde con tu CURP.');
            }
        }



    }

    public function validateFecha()
    {
        $fecha = $this->FECHA_NACIMIENTO;
        $fecha_esp = str_replace("/", "", $fecha);
        $anio     = substr($fecha_esp, 4, 4);

        if ($anio < 1957 || $anio > 2000){
            $this->addError('FECHA_NACIMIENTO', 'Fecha de Nsciemiento incorrecta');
        }
    }



    public function attributeLabels()
    {
        return [
            'N_PERIODO' => 'N  Periodo',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'FOLIO' => 'Folio',
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'CVE_DEPENDENCIA' => 'Cve  Dependencia',
            'CVE_COORDINACION' => 'Cve  Coordinacion',
            'TIPO_BENEFICIARIO' => 'Tipo  Beneficiario',
            'PRIMER_APELLIDO' => 'Apellido Paterno',
            'SEGUNDO_APELLIDO' => 'Apellido Materno',
            'NOMBRES' => 'Nombre(s)',
            'NOMBRE_COMPLETO' => 'Nombre  Completo',
            'FECHA_NACIMIENTO' => 'Fecha  de Nacimiento',
            'NUMERO_HIJOS' => 'Numero  Hijos',
            'SEXO' => 'Sexo',
            'TP_ID_OFICIAL' => 'Documentación de Identificación',
            'FOLIO_ID_OFICIAL' => 'Folio, Clave o número del comprobante de identificación oficial',
            'CVE_ESTADO_CIVIL' => 'Estado  Civil',
            'CVE_GRADO_ESTUDIOS' => 'Cve  Grado  Estudios',
            'CVE_PARENTESCO' => 'Cve  Parentesco',
            'CURP' => 'CURP',
            'RFC' => 'RFC',
            'CVE_NACIONALIDAD' => 'Nacionalidad',
            'CVE_LUGAR_NACIMIENTO' => 'Entidad Federativa de Nacimiento',
            'CVE_ACTIVIDAD_LABORAL' => 'Cve  Actividad  Laboral',
            'CVE_SITUACION_LABORAL' => 'Cve  Situacion  Laboral',
            'CALLE' => 'Calle, Avenida, Callejón, Carretera, Camino, Boulevard, km',
            'NUM_EXT' => 'Número  Exterior',
            'NUM_INT' => 'Número Interior',
            'MANZANA' => 'Manzana',
            'LOTE' => 'Lote',
            'CODIGO_POSTAL' => 'Código Postal',
            'SECCION' => 'Sección',
            'ENTRE_CALLE' => 'Entre  la Calle',
            'Y_CALLE' => 'Y  la Calle',
            'OTRA_REFERENCIA' => 'Rasgo Fisico que ayude a ubicar la vivienda',
            'LADA_TELEFONO' => 'Lada  Telefono',
            'TELEFONO' => 'Teléfono fijo (con lada)',
            'LADA_FAX' => 'Lada  Fax',
            'FAX' => 'Teléfono Celular',
            'COLONIA' => 'Colonia, Fraccionamiento, Barrio, Unidad Habitacional',
            'CVE_LOCALIDAD' => 'Clave  Localidad',
            'LOCALIDAD' => 'Localidad',
            'AGEB' => 'Clave de AGEB',
            'CVE_MUNICIPIO' => 'Clave de Municipio',
            'CVE_ENTIDAD_FEDERATIVA' => 'Clave de Estado',
            'CVE_REGION' => 'Cve  Region',
            'CORREO_ELECTRONICO' => 'Correo  Electrónico',
            'MISMO_DOMICILIO' => 'Mismo  Domicilio',
            'CVE_RED_SOCIAL' => 'Cve  Red  Social',
            'RED_SOCIAL' => 'Red  Social',
            'LATITUD' => 'Latitud',
            'LONGITUD' => 'Longitud',
            'TIPO_BENEFICIARIO_C' => 'Tipo  Beneficiario  C',
            'PRIMER_APELLIDO_C' => 'Primer  Apellido  C',
            'SEGUNDO_APELLIDO_C' => 'Segundo  Apellido  C',
            'NOMBRES_C' => 'Nombres  C',
            'NOMBRE_COMPLETO_C' => 'Nombre  Completo  C',
            'FECHA_NACIMIENTO_C' => 'Fecha  Nacimiento  C',
            'SEXO_C' => 'Sexo  C',
            'TP_ID_OFICIAL_C' => 'Tp  Id  Oficial  C',
            'FOLIO_ID_OFICIAL_C' => 'Folio  Id  Oficial  C',
            'CVE_ESTADO_CIVIL_C' => 'Cve  Estado  Civil  C',
            'CVE_GRADO_ESTUDIOS_C' => 'Cve  Grado  Estudios  C',
            'CVE_PARENTESCO_C' => 'Cve  Parentesco  C',
            'CURP_C' => 'Curp  C',
            'RFC_C' => 'Rfc  C',
            'CVE_NACIONALIDAD_C' => 'Cve  Nacionalidad  C',
            'CVE_LUGAR_NACIMIENTO_C' => 'Cve  Lugar  Nacimiento  C',
            'CVE_ACTIVIDAD_LABORAL_C' => 'Cve  Actividad  Laboral  C',
            'CVE_SITUACION_LABORAL_C' => 'Cve  Situacion  Laboral  C',
            'MISMO_DOMICILIO_C' => 'Mismo  Domicilio  C',
            'CALLE_C' => 'Calle  C',
            'NUM_EXT_C' => 'Num  Ext  C',
            'NUM_INT_C' => 'Num  Int  C',
            'MANZANA_C' => 'Manzana  C',
            'LOTE_C' => 'Lote  C',
            'CODIGO_POSTAL_C' => 'Codigo  Postal  C',
            'SECCION_C' => 'Seccion  C',
            'ENTRE_CALLE_C' => 'Entre  Calle  C',
            'Y_CALLE_C' => 'Y  Calle  C',
            'OTRA_REFERENCIA_C' => 'Otra  Referencia  C',
            'LADA_TELEFONO_C' => 'Lada  Telefono  C',
            'TELEFONO_C' => 'Telefono  C',
            'LADA_FAX_C' => 'Lada  Fax  C',
            'FAX_C' => 'Fax  C',
            'COLONIA_C' => 'Colonia  C',
            'CVE_LOCALIDAD_C' => 'Cve  Localidad  C',
            'LOCALIDAD_C' => 'Localidad  C',
            'CVE_MUNICIPIO_C' => 'Cve  Municipio  C',
            'CVE_ENTIDAD_FEDERATIVA_C' => 'Cve  Entidad  Federativa  C',
            'CVE_REGION_C' => 'Cve  Region  C',
            'AGEB_C' => 'Ageb  C',
            'NUMERO_HIJOS_C' => 'Numero  Hijos  C',
            'CORREO_ELECTRONICO_C' => 'Correo  Electronico  C',
            'CVE_RED_SOCIAL_C' => 'Cve  Red  Social  C',
            'RED_SOCIAL_C' => 'Red  Social  C',
            'LATITUD_C' => 'Latitud  C',
            'LONGITUD_C' => 'Longitud  C',
            'STATUS_1' => 'Status 1',
            'STATUS_2' => 'Status 2',
            'USU' => 'Usu',
            'PW' => 'Pw',
            'IP' => 'Ip',
            'FECHA_REG' => 'Fecha  Reg',
            'USU_M' => 'Usu  M',
            'PW_M' => 'Pw  M',
            'IP_M' => 'Ip  M',
            'FECHA_M' => 'Fecha  M',
        ];
    }

    public function getLocalidad()
    {
        return $this->hasOne(Localidad::className(), ['CVE_LOCALIDAD' => 'CVE_LOCALIDAD']);
    }

    public function getNacionalidad()
    {
        return $this->hasOne(Nacionalidades::className(), ['CVE_NACIONALIDAD' => 'CVE_NACIONALIDAD']);
    }

    public function getDocumento()
    {
        return $this->hasOne(Documentos::className(), ['CVE_DOCUMENTO' => 'TP_ID_OFICIAL']);
    }
    public function getNacimiento()
    {
        return $this->hasOne(EntidadFederativa::className(), ['CVE_ENTIDAD_FEDERATIVA' => 'CVE_LUGAR_NACIMIENTO']);
    }


    public function beforeSave($insert)
    {

        if (parent::beforeSave($insert)) {

            if ($this->isNewRecord) {
                $this->STATUS_1 = 1;
            }


            return true;
        }

    }
}
