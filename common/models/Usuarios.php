<?php

namespace common\models;

use Yii;


class Usuarios extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'FURWEB_CTRL_ACCESO_ET1';
    }

    public function rules()
    {
        return [
            [['FOLIO'], 'number'],
            [['CVE_PROGRAMA', 'CVE_MUNICIPIO', 'CVE_ENTIDAD_FEDERATIVA', 'CVE_REGION', 'CVE_DELEG_REGIONAL', 'CVE_NIVEL', 'N_PERIODO', 'CVE_SINDICATO', 'EDAD'], 'integer'],
            [['FECHA_REGISTRO', 'FECHA_NACIMIENTO'], 'string'],
            [['CVE_DEPENDENCIA'], 'string', 'max' => 10],
            [['PASSWORD_1'], 'string', 'max' => 15],
            [['NOMBRE_USUARIO'], 'string', 'max' => 40],
            [['PASSWORD_2'], 'string', 'max' => 300],
            [['APELLIDO_UNO', 'APELLIDO_DOS'], 'string', 'max' => 50],
            [['NOMBRE_UNO', 'NOMBRE_DOS', 'DIRECCION_IP', 'NOMBRE_TRES', 'NOMBRES'], 'string', 'max' => 80],
            [['FIRMA_ELECTRONICA'], 'string', 'max' => 4000],
            [['EMAIL'], 'string', 'max' => 60],
            [['CURP'], 'string', 'max' => 18],
            [['NAVEGADOR'], 'string', 'max' => 350],
            [['TIPO_USUARIO'], 'string', 'max' => 2],
            [['NOMBRE_COMPLETO'], 'string', 'max' => 250],
            [['STATUS_1', 'STATUS_2', 'STATUS_3'], 'string', 'max' => 1],
            [['LLAVE_PUBLICA1', 'LLAVE_PUBLICA2', 'LLAVE_PRIVADA1', 'LLAVE_PRIVADA2'], 'string', 'max' => 100],
            [['TEXTO_ORIGINAL', 'TEXTO_ENCRIPTADO'], 'string', 'max' => 500],
        ];
    }


    public function attributeLabels()
    {
        return [
            'FOLIO' => 'Folio',
            'CVE_DEPENDENCIA' => 'Cve  Dependencia',
            'CVE_PROGRAMA' => 'Cve  Programa',
            'PASSWORD_1' => 'Password 1',
            'NOMBRE_USUARIO' => 'Nombre  Usuario',
            'PASSWORD_2' => 'Password 2',
            'APELLIDO_UNO' => 'Apellido  Uno',
            'APELLIDO_DOS' => 'Apellido  Dos',
            'NOMBRE_UNO' => 'Nombre  Uno',
            'NOMBRE_DOS' => 'Nombre  Dos',
            'DIRECCION_IP' => 'Direccion  Ip',
            'FIRMA_ELECTRONICA' => 'Firma  Electronica',
            'FECHA_REGISTRO' => 'Fecha  Registro',
            'CVE_MUNICIPIO' => 'Cve  Municipio',
            'CVE_ENTIDAD_FEDERATIVA' => 'Cve  Entidad  Federativa',
            'CVE_REGION' => 'Cve  Region',
            'CVE_DELEG_REGIONAL' => 'Cve  Deleg  Regional',
            'EMAIL' => 'Email',
            'CVE_NIVEL' => 'Cve  Nivel',
            'CURP' => 'Curp',
            'NAVEGADOR' => 'Navegador',
            'TIPO_USUARIO' => 'Tipo  Usuario',
            'NOMBRE_TRES' => 'Nombre  Tres',
            'NOMBRE_COMPLETO' => 'Nombre  Completo',
            'FECHA_NACIMIENTO' => 'Fecha  Nacimiento',
            'STATUS_1' => 'Status 1',
            'STATUS_2' => 'Status 2',
            'STATUS_3' => 'Status 3',
            'N_PERIODO' => 'N  Periodo',
            'CVE_SINDICATO' => 'Cve  Sindicato',
            'EDAD' => 'Edad',
            'LLAVE_PUBLICA1' => 'Llave  Publica1',
            'LLAVE_PUBLICA2' => 'Llave  Publica2',
            'LLAVE_PRIVADA1' => 'Llave  Privada1',
            'LLAVE_PRIVADA2' => 'Llave  Privada2',
            'TEXTO_ORIGINAL' => 'Texto  Original',
            'TEXTO_ENCRIPTADO' => 'Texto  Encriptado',
            'NOMBRES' => 'Nombres',
        ];
    }
}
