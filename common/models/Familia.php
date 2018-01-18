<?php

namespace common\models;

use Yii;

class Familia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%FURWEB_METADATO_FAMILIA_150}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA', 'CONSECUTIVO', 'NUMERO_HIJOS', 'CVE_ESTADO_CIVIL', 'CVE_GRADO_ESTUDIOS', 'CVE_PARENTESCO', 'CVE_NACIONALIDAD', 'CVE_LUGAR_NACIMIENTO', 'CVE_ACTIVIDAD_LABORAL', 'CVE_DISCAPACIDAD'], 'number'],
            [['FOLIO', 'FOLIO_FUR'], 'integer'],
            [['FECHA_NACIMIENTO', 'FECHA_REG', 'FECHA_M'], 'string'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['PRIMER_APELLIDO', 'SEGUNDO_APELLIDO', 'NOMBRES'], 'string', 'max' => 80],
            [['NOMBRE_COMPLETO', 'CORREO_ELECTRONICO', 'USU', 'PW', 'IP', 'USU_M', 'PW_M', 'IP_M'], 'string', 'max' => 100],
            [['SEXO'], 'string', 'max' => 1],
            [['CURP'], 'string', 'max' => 18],
            [['FOLIO_ID_OFICIAL'], 'string', 'max' => 30],
            [['ASISTE_ESC', 'SABELEER', 'STATUS_2'], 'string', 'max' => 1],

            [['PRIMER_APELLIDO', 'NOMBRES', 'CVE_PARENTESCO', 'FECHA_NACIMIENTO', 'SEXO', 'CVE_ESTADO_CIVIL',
                'ASISTE_ESC', 'SABELEER', 'CVE_GRADO_ESTUDIOS', 'CVE_ACTIVIDAD_LABORAL', 'CURP', 'CVE_DISCAPACIDAD'],
                'required', 'message' => 'Campo Obligatorio'],

            [['FECHA_NACIMIENTO'],'date', 'format'=>'dd/mm/yyyy', 'message' => 'Formato no valido'],
            ['FECHA_NACIMIENTO', 'validateFecha'],
            [['CURP'], 'unique'],
            [['CURP'], 'match', 'pattern' => '/[A-Z]{4}\d{6}[HM][A-Z]{2}[B-DF-HJ-NP-TV-Z]{3}[A-Z0-9][0-9]/', 'message' => 'Formato no valido'],
            ['CURP', 'match', 'pattern' => '/^.{1,18}$/', 'message' => 'Tiene que tener 18 caracteres'],
            ['CURP', 'validateCurp'],
            [['PRIMER_APELLIDO','SEGUNDO_APELLIDO', 'NOMBRES'], 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
            [['FOLIO_ID_OFICIAL'], 'match', 'pattern' => '/^([a-z]{6})([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])(0[1-9]|1[0-9]|2[0-9]|3[0-3]|8[7-8])([h,m]{1})([0-9]{3})$/i', 'message' => 'Formato no valido'],
            ['FOLIO_ID_OFICIAL', 'validateCVE'],
        ];
    }

    public function validateCurp()
    {
        $fecha = $this->FECHA_NACIMIENTO;
        $curp = $this->CURP;
        $sexo = $this->SEXO;

        $fecha_esp = str_replace("/", "", $fecha);
        $dia     = substr($fecha_esp, 0, 2);
        $mes     = substr($fecha_esp, 2, 2);
        $anio     = substr($fecha_esp, 6, 4);

        $fechaCurp = substr($curp, 4, 6);
        $sexoCurp = substr($curp, 10, 1);
        $armada = $anio.$mes.$dia;

        if ($fechaCurp != $armada){
            $this->addError('CURP', 'El CURP no corrresponde a tu fecha de nacimiento.');
        }

        if ($sexo != $sexoCurp){
            $this->addError('CURP', 'El CURP no corrresponde a tu Sexo.');
        }

    }

    public function validateCVE()
    {
        $fecha = $this->FECHA_NACIMIENTO;
        $cve = $this->FOLIO_ID_OFICIAL;
        $sexo = $this->SEXO;

        $fecha_esp = str_replace("/", "", $fecha);
        $dia     = substr($fecha_esp, 0, 2);
        $mes     = substr($fecha_esp, 2, 2);
        $anio     = substr($fecha_esp, 6, 2);

        $fechaCve = substr($cve, 6, 6);
        $sexoCve = substr($cve, 14, 1);
        $armada = $anio.$mes.$dia;

        if ($fechaCve != $armada){
            $this->addError('FOLIO_ID_OFICIAL', 'El CURP no corrresponde a tu fecha de nacimiento.');
        }

        if ($sexo != $sexoCve){
            $this->addError('FOLIO_ID_OFICIAL', 'El CURP no corrresponde a tu Sexo.');
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
            'CONSECUTIVO' => 'Consecutivo',
            'FOLIO_FUR' => 'Folio  Fur',
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'PRIMER_APELLIDO' => 'Apellido Paterno',
            'SEGUNDO_APELLIDO' => 'Apellido Materno',
            'NOMBRES' => 'Nombre',
            'NOMBRE_COMPLETO' => 'Nombre  Completo',
            'FECHA_NACIMIENTO' => 'Fecha  de Nacimiento',
            'NUMERO_HIJOS' => 'Numero  Hijos',
            'SEXO' => 'Sexo',
            'CVE_ESTADO_CIVIL' => 'Estado  Civil',
            'CVE_GRADO_ESTUDIOS' => 'Grado de  Estudios',
            'CVE_PARENTESCO' => '¿Qué parentesco tiene con el jefe(a) del hogar?',
            'CURP' => 'CURP',
            'CVE_NACIONALIDAD' => 'Cve  Nacionalidad',
            'CVE_LUGAR_NACIMIENTO' => 'Cve  Lugar  Nacimiento',
            'CORREO_ELECTRONICO' => 'Correo  Electronico',
            'FOLIO_ID_OFICIAL' => 'Clave de Elector',
            'CVE_ACTIVIDAD_LABORAL' => 'Actividad  Laboral',
            'ASISTE_ESC' => '¿Asiste a la Escuela?',
            'CVE_DISCAPACIDAD' => '¿Tiene alguna Discapacidad?',
            'SABELEER' => '¿Sabe leer y escribir un recado?',
            'STATUS_2' => 'Status 2',
            'FECHA_REG' => 'Fecha  Reg',
            'USU' => 'Usu',
            'PW' => 'Pw',
            'IP' => 'Ip',
            'FECHA_M' => 'Fecha  M',
            'USU_M' => 'Usu  M',
            'PW_M' => 'Pw  M',
            'IP_M' => 'Ip  M',
        ];
    }

    public static function primaryKey()
    {
        return ['FOLIO_FUR'];
    }

    public function beforeSave($insert)
    {

        if (parent::beforeSave($insert)) {

            if ($this->isNewRecord) {
                $sql = "SELECT ".Yii::$app->params['sequenceFamilia'].".NEXTVAL FROM DUAL";
                $result = Yii::$app->db->createCommand($sql)->queryOne();
                $this->FOLIO_FUR = $result["NEXTVAL"];
            }

            return true;
        }

    }
}
