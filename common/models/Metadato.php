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
            [['FOLIO', 'PRIMER_APELLIDO'], 'required'],
            [['FOLIO', 'CODIGO_POSTAL', 'CODIGO_POSTAL_C', 'CVE_LOCALIDAD_C', 'NUMERO_HIJOS_C'], 'integer'],
            [['FECHA_NACIMIENTO', 'FECHA_NACIMIENTO_C', 'FECHA_REG', 'FECHA_M'], 'string'],
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
        ];
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
            'CVE_ESTADO_CIVIL' => 'Cve  Estado  Civil',
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
            'SECCION' => 'Seccion',
            'ENTRE_CALLE' => 'Entre  Calle',
            'Y_CALLE' => 'Y  Calle',
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
}
