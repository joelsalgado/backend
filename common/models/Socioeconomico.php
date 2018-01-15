<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%SEDESEM_150}}".
 *
 * @property double $N_PERIODO
 * @property double $CVE_PROGRAMA
 * @property int $FOLIO
 * @property string $FOLIO_RELACIONADO
 * @property string $ES_JEFA
 * @property double $CVE_PARENTESCO
 * @property string $INDIGENA
 * @property string $HABLA_LENGUA_I
 * @property double $CVE_LENGUA
 * @property double $CVE_CANT
 * @property string $REPATRIADO
 * @property double $CVE_TIEMPO_RADICAR
 * @property string $ES_VICTIMA
 * @property string $DELITO_CUAL
 * @property double $CVE_ENFERMEDAD
 * @property string $EMBARAZADA
 * @property double $EMBARAZADA_MESES
 * @property double $CVE_DISCAPACIDAD
 * @property double $CVE_INST_SALUD
 * @property double $CVE_ORFANDAD
 * @property double $CVE_GRADO_ESTUDIOS
 * @property string $DESC_CCT
 * @property string $TIPO_ZONA
 * @property string $TRABAJA
 * @property double $CVE_TIPO_EMPLEO
 * @property double $CVE_ACTIVIDAD_LABORAL
 * @property double $CVE_SALARIO
 * @property string $ALGUN_INGRESO
 * @property string $ALGUN_INGRESO_TIPO
 * @property double $ALGUN_INGRESO_MONTO
 * @property string $ALQUILER_TERRENO
 * @property double $ALQUILER_TERRENO_MONTO
 * @property string $PENSION
 * @property double $PENSION_MONTO
 * @property double $CVE_SALARIO2
 * @property double $CVE_DEPEN_ECONOM
 * @property double $CVE_PARENTESCO2
 * @property string $RECIBE_APOYO
 * @property double $CUANTOS_APOYOS
 * @property string $CUAL_APOYO
 * @property double $CVE_CANT2
 * @property string $TIPO_ZONA2
 * @property double $CVE_ACTIVIDAD
 * @property double $CVE_REALIZA_ACTIVIDAD
 * @property string $ACTIVIDAD_FUE
 * @property double $CVE_SALARIO3
 * @property string $TIPO_ZONA3
 * @property string $TRABAJA2
 * @property double $CVE_SALARIO4
 * @property string $ESTUDIA
 * @property string $RECIBE_INGRESO
 * @property double $CVE_SALARIO5
 * @property string $BECA
 * @property double $CVE_PER_INGRESO
 * @property double $MONTO_BECA
 * @property double $MONTO_TRANSPORTE
 * @property double $CVE_TIEMPO
 * @property double $CVE_CANT3
 * @property string $COMPARTEN_GASTOS
 * @property string $ADULTO_SINCOMIDA
 * @property string $ADULTO_SINTIOHAMBRE
 * @property string $MENOR_PVA
 * @property string $ADULTO_COMIO
 * @property string $ADULTO_PVA
 * @property string $LIMOSNA
 * @property string $ADULTO_SINCENAR
 * @property string $MENOR_COMIO
 * @property string $ADULTO_COMIOMENOS
 * @property string $MENOR_COMIOMENOS
 * @property string $MENOR_SINTIOHAMBRE
 * @property string $MENOR_MENOSCOMIDA
 * @property string $MENOR_ACOSTARHAMBRE
 * @property double $CVE_CASADONDEVIVE_ES
 * @property double $CVE_MATERIAL
 * @property double $CVE_MATERIAL2
 * @property double $CVE_MATERIAL3
 * @property double $CUARTOS
 * @property double $CUARTOS_DORMIR
 * @property double $CVE_SERVICIO_AGUA
 * @property string $EXCUSADO
 * @property string $SANITARIO
 * @property double $CVE_SERVICIO_SANDREN
 * @property double $CVE_SERVICIO_SANDREN2
 * @property double $CVE_SERVICIO_SANDREN3
 * @property double $CVE_SERVICIO_LUZ
 * @property double $CVE_COMBUSTIBLE
 * @property string $FOGON
 * @property string $LAVADERO
 * @property string $TARJA
 * @property string $REGADERA
 * @property string $TINACO
 * @property string $CISTERNA
 * @property string $PILETA
 * @property string $CALENTADOR_SOLAR
 * @property string $CALENTADOR_GAS
 * @property string $MEDIDOR_LUZ
 * @property string $BOMBA_AGUA
 * @property string $TANQUE_GAS
 * @property string $AIRE_ACOND
 * @property string $CALEFACCION
 * @property double $CVE_CANT4
 * @property double $CVE_CASADONDEVIVE_ES2
 * @property string $AFECTADA
 * @property string $STATUS_1
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
class Socioeconomico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%SEDESEM_150}}';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA', 'CVE_PARENTESCO', 'CVE_LENGUA', 'CVE_CANT', 'CVE_TIEMPO_RADICAR', 'CVE_ENFERMEDAD', 'EMBARAZADA_MESES', 'CVE_DISCAPACIDAD', 'CVE_INST_SALUD', 'CVE_ORFANDAD', 'CVE_GRADO_ESTUDIOS', 'CVE_TIPO_EMPLEO', 'CVE_ACTIVIDAD_LABORAL', 'CVE_SALARIO', 'ALGUN_INGRESO_MONTO', 'ALQUILER_TERRENO_MONTO', 'PENSION_MONTO', 'CVE_SALARIO2', 'CVE_DEPEN_ECONOM', 'CVE_PARENTESCO2', 'CUANTOS_APOYOS', 'CVE_CANT2', 'CVE_ACTIVIDAD', 'CVE_REALIZA_ACTIVIDAD', 'CVE_SALARIO3', 'CVE_SALARIO4', 'CVE_SALARIO5', 'CVE_PER_INGRESO', 'MONTO_BECA', 'MONTO_TRANSPORTE', 'CVE_TIEMPO', 'CVE_CANT3', 'CVE_CASADONDEVIVE_ES', 'CVE_MATERIAL', 'CVE_MATERIAL2', 'CVE_MATERIAL3', 'CUARTOS', 'CUARTOS_DORMIR', 'CVE_SERVICIO_AGUA', 'CVE_SERVICIO_SANDREN', 'CVE_SERVICIO_SANDREN2', 'CVE_SERVICIO_SANDREN3', 'CVE_SERVICIO_LUZ', 'CVE_COMBUSTIBLE', 'CVE_CANT4', 'CVE_CASADONDEVIVE_ES2'], 'number'],
            [['FOLIO'], 'integer'],
            [['FECHA_REG', 'FECHA_M'], 'string'],
            [['FOLIO_RELACIONADO'], 'string', 'max' => 16],
            [['ES_JEFA', 'INDIGENA', 'HABLA_LENGUA_I', 'REPATRIADO', 'ES_VICTIMA', 'EMBARAZADA', 'TIPO_ZONA', 'TRABAJA', 'ALGUN_INGRESO', 'ALQUILER_TERRENO', 'PENSION', 'RECIBE_APOYO', 'TIPO_ZONA2', 'ACTIVIDAD_FUE', 'TIPO_ZONA3', 'TRABAJA2', 'ESTUDIA', 'RECIBE_INGRESO', 'BECA', 'COMPARTEN_GASTOS', 'ADULTO_SINCOMIDA', 'ADULTO_SINTIOHAMBRE', 'MENOR_PVA', 'ADULTO_COMIO', 'ADULTO_PVA', 'LIMOSNA', 'ADULTO_SINCENAR', 'MENOR_COMIO', 'ADULTO_COMIOMENOS', 'MENOR_COMIOMENOS', 'MENOR_SINTIOHAMBRE', 'MENOR_MENOSCOMIDA', 'MENOR_ACOSTARHAMBRE', 'EXCUSADO', 'SANITARIO', 'FOGON', 'LAVADERO', 'TARJA', 'REGADERA', 'TINACO', 'CISTERNA', 'PILETA', 'CALENTADOR_SOLAR', 'CALENTADOR_GAS', 'MEDIDOR_LUZ', 'BOMBA_AGUA', 'TANQUE_GAS', 'AIRE_ACOND', 'CALEFACCION', 'AFECTADA', 'STATUS_1', 'STATUS_2'], 'string', 'max' => 1],
            [['DELITO_CUAL', 'DESC_CCT', 'ALGUN_INGRESO_TIPO'], 'string', 'max' => 100],
            [['CUAL_APOYO', 'USU', 'PW', 'IP', 'USU_M', 'PW_M', 'IP_M'], 'string', 'max' => 80],
        ];
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
            'FOLIO_RELACIONADO' => 'Folio  Relacionado',
            'ES_JEFA' => '¿Es  usted el jefe(a) del Hogar?',
            'CVE_PARENTESCO' => 'Parentesco',
            'INDIGENA' => '¿Se considera usted indígena?',
            'HABLA_LENGUA_I' => '¿Habla  alguna Lengua Indigena?',
            'CVE_LENGUA' => 'Lengua Indigena',
            'CVE_CANT' => '¿Cuántos hijos tiene?',
            'REPATRIADO' => '¿Usted es repatriado?',
            'CVE_TIEMPO_RADICAR' => 'Tiempo de radicar en el Estado de México',
            'ES_VICTIMA' => '¿Usted ha sido víctima u ofendido de algún delito?',
            'DELITO_CUAL' => '¿Cuál?',
            'CVE_ENFERMEDAD' => '¿Padece alguna enfermedad crónico-degenerativa?',
            'EMBARAZADA' => '¿En caso de ser mujer Actualmente se encuentra embarazada?',
            'EMBARAZADA_MESES' => '¿Meses?',
            'CVE_DISCAPACIDAD' => '¿El solicitante tiene alguna discapacidad?',
            'CVE_INST_SALUD' => '¿El solicitante está afiliado a alguna institución de salud?',
            'CVE_ORFANDAD' => '¿El solicitante presenta alguna condición de orfandad?',
            'CVE_GRADO_ESTUDIOS' => '¿Qué grado de estudios tiene?',
            'DESC_CCT' => '¿Nombre de la escuela?',

            'TIPO_ZONA' => 'El hogar se encuentra en:',
            'TRABAJA' => '¿Actualmente trabaja?',
            'CVE_TIPO_EMPLEO' => 'Su empleo actual es:',
            'CVE_ACTIVIDAD_LABORAL' => '¿En qué trabaja?',
            'CVE_SALARIO' => '¿Cuál es el monto mensual que recibe por ese trabajo?',
            'ALGUN_INGRESO' => '¿A pesar de no trabajar cuenta con algún ingreso?',
            'ALGUN_INGRESO_TIPO' => '¿De que Tipo?',
            'ALGUN_INGRESO_MONTO' => '¿Monto?',
            'ALQUILER_TERRENO' => '¿En su hogar se reciben ingresos por alquilar algún terreno o inmueble?',
            'ALQUILER_TERRENO_MONTO' => '¿Monto?',
            'PENSION' => '¿En su hogar se reciben ingresos por jubilaciones y/o pensiones, de otros hogares, de organizaciones o prevenientes de algún otro país?',
            'PENSION_MONTO' => '¿Monto?',
            'CVE_SALARIO2' => '¿Cuál es el ingreso total mensual del hogar (adicional al salario del jefe)?',
            'CVE_DEPEN_ECONOM' => '¿Cuántos dependientes económicos hay en el hogar?',
            'CVE_PARENTESCO2' => 'Parentesco de los dependientes económicos, respecto al jefe del hogar (especifique el número de personas en cada caso)',
            'RECIBE_APOYO' => '¿Actualmente algún integrante del hogar cuenta con el apoyo de algún programa de desarrollo social?',
            'CUANTOS_APOYOS' => '¿Cuantos Apoyos?',
            'CUAL_APOYO' => '¿Cuales Apoyos?',
            'CVE_CANT2' => '¿Cuántas personas viven normalmente en esta vivienda, contando a los niños y a los ancianos?',

            'TIPO_ZONA2' => 'El domicilio de la solicitante se encuentra en:',
            'CVE_ACTIVIDAD' => '¿El mes pasado realizo alguna de las siguientes actividades?',
            'CVE_REALIZA_ACTIVIDAD' => '¿Dónde realizo dicha actividad?',
            'ACTIVIDAD_FUE' => 'Esta actividad fue…',
            'CVE_SALARIO3' => '¿Cuál es el monto mensual que recibe por esta actividad?',

            'TIPO_ZONA3' => 'El domicilio del solicitante se encuentra en:',
            'TRABAJA2' => '¿Actualmente trabaja?',
            'CVE_SALARIO4' => '¿Cuál es el monto del pago mensual que recibe?',
            'ESTUDIA' => '¿Actualmente se encuentra usted estudiando?',
            'RECIBE_INGRESO' => '¿Recibe algún ingreso por parte del jefe (a) del hogar?',
            'CVE_SALARIO5' => '¿Cuál es el monto mensual del ingreso que recibe por parte del jefe del hogar?',
            'BECA' => '¿Actualmente el solicitante tiene alguna beca escolar?',
            'CVE_PER_INGRESO' => 'La periodicidad del ingreso que recibe por beca',
            'MONTO_BECA' => 'Monto que recibe de la beca',
            'MONTO_TRANSPORTE' => 'Monto mensual que gasta el solicitante en transporte',
            'CVE_TIEMPO' => '¿Cuál es el tiempo de traslado a la escuela?',

            'CVE_CANT3' => 'Cuántos hogares o grupos de personas tienen gasto separado para comer contando el de usted?',
            'COMPARTEN_GASTOS' => '¿Todas las personas que viven en esta vivienda comparten un mismo gasto para comer?',
            'ADULTO_SINCOMIDA' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un adulto se quedó sin comida?',
            'ADULTO_SINTIOHAMBRE' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o algún adulto en su hogar sintió hambre pero no comió?',
            'MENOR_PVA' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un menor tuvo poca variedad en sus alimentos?',
            'ADULTO_COMIO' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar solo comió una vez al día o dejó de comer todo un día?',
            'ADULTO_PVA' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar tuvo una alimentación basada en muy poca variedad de alimentos?',
            'LIMOSNA' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez tuvieron que hacer algo que hubieran preferido no hacer para conseguir comida, tal como pedir limosna o mandar a los niños a trabajar?',
            'ADULTO_SINCENAR' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar dejó de desayunar, comer o cenar?',
            'MENOR_COMIO' => 'En los últimos tres meses, por falta de dinero o recursos ¿algún menor comió sólo una vez al día o dejó de comer todo un día?',
            'ADULTO_COMIOMENOS' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar comió menos de lo que usted piensa que debía comer?',
            'MENOR_COMIOMENOS' => 'En los últimos tres meses, por falta de dinero o recursos ¿algún menor comió menos de lo que debería comer?',
            'MENOR_SINTIOHAMBRE' => 'En los últimos tres meses, por falta de dinero o recursos ¿algún menor sintió hambre pero no comió?',
            'MENOR_MENOSCOMIDA' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un menor se le tuvo que servir menos comida?',
            'MENOR_ACOSTARHAMBRE' => 'En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un menor se tuvo que acostar con hambre?',

            'CVE_CASADONDEVIVE_ES' => 'La casa donde vive es',
            'CVE_MATERIAL' => '¿De qué material es la mayor parte del techo de esta vivienda?',
            'CVE_MATERIAL2' => '¿De qué material es la mayor parte de las paredes o muros de esta vivienda?',
            'CVE_MATERIAL3' => '¿De qué material es la mayor parte del piso de esta vivienda?',
            'CUARTOS' => '¿Cuántos cuartos tiene en total esta vivienda contando la cocina? (no cuente pasillos ni baños)',
            'CUARTOS_DORMIR' => '¿Cuántos cuartos se usan para dormir? sin contar pasillos ni baños?',
            'CVE_SERVICIO_AGUA' => 'En esta vivienda tienen',
            'EXCUSADO' => '¿Tienen excusado, retrete, sanitario letrina u hoyo negro?',
            'SANITARIO' => '¿El servicio sanitario lo comparten con otra vivienda?',
            'CVE_SERVICIO_SANDREN' => 'El servicio sanitario...',
            'CVE_SERVICIO_SANDREN2' => '¿Cuántos baños tiene esta vivienda? ',
            'CVE_SERVICIO_SANDREN3' => 'Esta vivienda tiene drenaje o desagüe conectado a ...',
            'CVE_SERVICIO_LUZ' => 'En esta vivienda la luz eléctrica la obtienen...z',
            'CVE_COMBUSTIBLE' => 'El combustible que más usan para cocinar es...',

            'FOGON' => '¿La estufa (fogón) de leña o carbón con la que cocinan tiene chimenea o algún ducto para sacar el humo de esta vivienda?',

            'LAVADERO' => 'Lavadero',
            'TARJA' => 'Tarja',
            'REGADERA' => 'Regadera',
            'TINACO' => 'Tinaco',
            'CISTERNA' => 'Cisterna',
            'PILETA' => 'Pileta',
            'CALENTADOR_SOLAR' => 'Calentador  Solar',
            'CALENTADOR_GAS' => 'Calentador  Gas',
            'MEDIDOR_LUZ' => 'Medidor  Luz',
            'BOMBA_AGUA' => 'Bomba  Agua',
            'TANQUE_GAS' => 'Tanque  Gas',
            'AIRE_ACOND' => 'Aire  Acond',
            'CALEFACCION' => 'Calefaccion',

            'CVE_CANT4' => '¿Cuantos integrantes de su hogar comparten cuarto dormitorio? (sin contar pasillos',
            'CVE_CASADONDEVIVE_ES2' => 'Esta vivienda es...',
            'AFECTADA' => '¿Esta vivienda ha sido afectada por algún fenómeno natural?',

            'STATUS_1' => 'Status 1',
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
