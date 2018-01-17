<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FURWEB_METADATO_FAMILIA_150}}".
 *
 * @property double $N_PERIODO
 * @property double $CVE_PROGRAMA
 * @property int $FOLIO
 * @property double $CONSECUTIVO
 * @property string $FOLIO_FUR
 * @property string $FOLIO_RELACIONADO
 * @property string $PRIMER_APELLIDO
 * @property string $SEGUNDO_APELLIDO
 * @property string $NOMBRES
 * @property string $NOMBRE_COMPLETO
 * @property string $FECHA_NACIMIENTO
 * @property double $NUMERO_HIJOS
 * @property string $SEXO
 * @property double $CVE_ESTADO_CIVIL
 * @property double $CVE_GRADO_ESTUDIOS
 * @property double $CVE_PARENTESCO
 * @property string $CURP
 * @property double $CVE_NACIONALIDAD
 * @property double $CVE_LUGAR_NACIMIENTO
 * @property string $CORREO_ELECTRONICO
 * @property string $FOLIO_ID_OFICIAL
 * @property double $CVE_ACTIVIDAD_LABORAL
 * @property string $ASISTE_ESC
 * @property double $CVE_DISCAPACIDAD
 * @property string $SABELEER
 * @property string $STATUS_2
 * @property string $FECHA_REG
 * @property string $USU
 * @property string $PW
 * @property string $IP
 * @property string $FECHA_M
 * @property string $USU_M
 * @property string $PW_M
 * @property string $IP_M
 */
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
            [['FOLIO'], 'integer'],
            [['FECHA_NACIMIENTO', 'FECHA_REG', 'FECHA_M'], 'string'],
            [['FOLIO_FUR', 'FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['PRIMER_APELLIDO', 'SEGUNDO_APELLIDO', 'NOMBRES'], 'string', 'max' => 80],
            [['NOMBRE_COMPLETO', 'CORREO_ELECTRONICO', 'USU', 'PW', 'IP', 'USU_M', 'PW_M', 'IP_M'], 'string', 'max' => 100],
            [['SEXO'], 'string', 'max' => 3],
            [['CURP'], 'string', 'max' => 18],
            [['FOLIO_ID_OFICIAL'], 'string', 'max' => 30],
            [['ASISTE_ESC', 'SABELEER', 'STATUS_2'], 'string', 'max' => 1],
            [['CURP'], 'unique'],
            [['CURP'], 'match', 'pattern' => '/[A-Z]{4}\d{6}[HM][A-Z]{2}[B-DF-HJ-NP-TV-Z]{3}[A-Z0-9][0-9]/', 'message' => 'Formato no valido'],
            ['CURP', 'match', 'pattern' => '/^.{1,18}$/', 'message' => 'Tiene que tener 18 caracteres'],
            ['CURP', 'validateCurp'],
        ];
    }

    public function validateCurp()
    {
        $fecha = $this->FECHA_NACIMIENTO;



        if ($fecha = '25/19/1994') {
            $this->addError('CURP', 'Incorrect username or password.');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'N_PERIODO' => 'N  Periodo',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'FOLIO' => 'Folio',
            'CONSECUTIVO' => 'Consecutivo',
            'FOLIO_FUR' => 'Folio  Fur',
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'PRIMER_APELLIDO' => 'Primer  Apellido',
            'SEGUNDO_APELLIDO' => 'Segundo  Apellido',
            'NOMBRES' => 'Nombres',
            'NOMBRE_COMPLETO' => 'Nombre  Completo',
            'FECHA_NACIMIENTO' => 'Fecha  Nacimiento',
            'NUMERO_HIJOS' => 'Numero  Hijos',
            'SEXO' => 'Sexo',
            'CVE_ESTADO_CIVIL' => 'Cve  Estado  Civil',
            'CVE_GRADO_ESTUDIOS' => 'Cve  Grado  Estudios',
            'CVE_PARENTESCO' => 'Cve  Parentesco',
            'CURP' => 'Curp',
            'CVE_NACIONALIDAD' => 'Cve  Nacionalidad',
            'CVE_LUGAR_NACIMIENTO' => 'Cve  Lugar  Nacimiento',
            'CORREO_ELECTRONICO' => 'Correo  Electronico',
            'FOLIO_ID_OFICIAL' => 'Folio  Id  Oficial',
            'CVE_ACTIVIDAD_LABORAL' => 'Cve  Actividad  Laboral',
            'ASISTE_ESC' => 'Asiste  Esc',
            'CVE_DISCAPACIDAD' => 'Cve  Discapacidad',
            'SABELEER' => 'Sabeleer',
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
        return ['FOLIO'];
    }
}
