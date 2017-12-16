<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Metadato;

/**
 * MetadatoSearch represents the model behind the search form of `common\models\Metadato`.
 */
class MetadatoSearch extends Metadato
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['N_PERIODO', 'CVE_PROGRAMA', 'NUMERO_HIJOS', 'TP_ID_OFICIAL', 'CVE_ESTADO_CIVIL', 'CVE_GRADO_ESTUDIOS', 'CVE_PARENTESCO', 'CVE_NACIONALIDAD', 'CVE_LUGAR_NACIMIENTO', 'CVE_ACTIVIDAD_LABORAL', 'CVE_SITUACION_LABORAL', 'SECCION', 'CVE_LOCALIDAD', 'CVE_MUNICIPIO', 'CVE_ENTIDAD_FEDERATIVA', 'CVE_REGION', 'LATITUD', 'LONGITUD', 'TP_ID_OFICIAL_C', 'CVE_ESTADO_CIVIL_C', 'CVE_GRADO_ESTUDIOS_C', 'CVE_PARENTESCO_C', 'CVE_NACIONALIDAD_C', 'CVE_LUGAR_NACIMIENTO_C', 'CVE_ACTIVIDAD_LABORAL_C', 'CVE_SITUACION_LABORAL_C', 'SECCION_C', 'CVE_MUNICIPIO_C', 'CVE_ENTIDAD_FEDERATIVA_C', 'CVE_REGION_C', 'LATITUD_C', 'LONGITUD_C'], 'number'],
            [['FOLIO', 'CODIGO_POSTAL', 'CODIGO_POSTAL_C', 'CVE_LOCALIDAD_C', 'NUMERO_HIJOS_C'], 'integer'],
            [['FOLIO_RELACIONADO', 'CVE_DEPENDENCIA', 'CVE_COORDINACION', 'TIPO_BENEFICIARIO', 'PRIMER_APELLIDO', 'SEGUNDO_APELLIDO', 'NOMBRES', 'NOMBRE_COMPLETO', 'FECHA_NACIMIENTO', 'SEXO', 'FOLIO_ID_OFICIAL', 'CURP', 'RFC', 'CALLE', 'NUM_EXT', 'NUM_INT', 'MANZANA', 'LOTE', 'ENTRE_CALLE', 'Y_CALLE', 'OTRA_REFERENCIA', 'LADA_TELEFONO', 'TELEFONO', 'LADA_FAX', 'FAX', 'COLONIA', 'LOCALIDAD', 'AGEB', 'CORREO_ELECTRONICO', 'MISMO_DOMICILIO', 'CVE_RED_SOCIAL', 'RED_SOCIAL', 'TIPO_BENEFICIARIO_C', 'PRIMER_APELLIDO_C', 'SEGUNDO_APELLIDO_C', 'NOMBRES_C', 'NOMBRE_COMPLETO_C', 'FECHA_NACIMIENTO_C', 'SEXO_C', 'FOLIO_ID_OFICIAL_C', 'CURP_C', 'RFC_C', 'MISMO_DOMICILIO_C', 'CALLE_C', 'NUM_EXT_C', 'NUM_INT_C', 'MANZANA_C', 'LOTE_C', 'ENTRE_CALLE_C', 'Y_CALLE_C', 'OTRA_REFERENCIA_C', 'LADA_TELEFONO_C', 'TELEFONO_C', 'LADA_FAX_C', 'FAX_C', 'COLONIA_C', 'LOCALIDAD_C', 'AGEB_C', 'CORREO_ELECTRONICO_C', 'CVE_RED_SOCIAL_C', 'RED_SOCIAL_C', 'STATUS_1', 'STATUS_2', 'USU', 'PW', 'IP', 'FECHA_REG', 'USU_M', 'PW_M', 'IP_M', 'FECHA_M'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Metadato::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'N_PERIODO' => $this->N_PERIODO,
            'CVE_PROGRAMA' => $this->CVE_PROGRAMA,
            'FOLIO' => $this->FOLIO,
            'NUMERO_HIJOS' => $this->NUMERO_HIJOS,
            'TP_ID_OFICIAL' => $this->TP_ID_OFICIAL,
            'CVE_ESTADO_CIVIL' => $this->CVE_ESTADO_CIVIL,
            'CVE_GRADO_ESTUDIOS' => $this->CVE_GRADO_ESTUDIOS,
            'CVE_PARENTESCO' => $this->CVE_PARENTESCO,
            'CVE_NACIONALIDAD' => $this->CVE_NACIONALIDAD,
            'CVE_LUGAR_NACIMIENTO' => $this->CVE_LUGAR_NACIMIENTO,
            'CVE_ACTIVIDAD_LABORAL' => $this->CVE_ACTIVIDAD_LABORAL,
            'CVE_SITUACION_LABORAL' => $this->CVE_SITUACION_LABORAL,
            'CODIGO_POSTAL' => $this->CODIGO_POSTAL,
            'SECCION' => $this->SECCION,
            'CVE_LOCALIDAD' => $this->CVE_LOCALIDAD,
            'CVE_MUNICIPIO' => $this->CVE_MUNICIPIO,
            'CVE_ENTIDAD_FEDERATIVA' => $this->CVE_ENTIDAD_FEDERATIVA,
            'CVE_REGION' => $this->CVE_REGION,
            'LATITUD' => $this->LATITUD,
            'LONGITUD' => $this->LONGITUD,
            'TP_ID_OFICIAL_C' => $this->TP_ID_OFICIAL_C,
            'CVE_ESTADO_CIVIL_C' => $this->CVE_ESTADO_CIVIL_C,
            'CVE_GRADO_ESTUDIOS_C' => $this->CVE_GRADO_ESTUDIOS_C,
            'CVE_PARENTESCO_C' => $this->CVE_PARENTESCO_C,
            'CVE_NACIONALIDAD_C' => $this->CVE_NACIONALIDAD_C,
            'CVE_LUGAR_NACIMIENTO_C' => $this->CVE_LUGAR_NACIMIENTO_C,
            'CVE_ACTIVIDAD_LABORAL_C' => $this->CVE_ACTIVIDAD_LABORAL_C,
            'CVE_SITUACION_LABORAL_C' => $this->CVE_SITUACION_LABORAL_C,
            'CODIGO_POSTAL_C' => $this->CODIGO_POSTAL_C,
            'SECCION_C' => $this->SECCION_C,
            'CVE_LOCALIDAD_C' => $this->CVE_LOCALIDAD_C,
            'CVE_MUNICIPIO_C' => $this->CVE_MUNICIPIO_C,
            'CVE_ENTIDAD_FEDERATIVA_C' => $this->CVE_ENTIDAD_FEDERATIVA_C,
            'CVE_REGION_C' => $this->CVE_REGION_C,
            'NUMERO_HIJOS_C' => $this->NUMERO_HIJOS_C,
            'LATITUD_C' => $this->LATITUD_C,
            'LONGITUD_C' => $this->LONGITUD_C,
        ]);

        $query->andFilterWhere(['like', 'FOLIO_RELACIONADO', $this->FOLIO_RELACIONADO])
            ->andFilterWhere(['like', 'CVE_DEPENDENCIA', $this->CVE_DEPENDENCIA])
            ->andFilterWhere(['like', 'CVE_COORDINACION', $this->CVE_COORDINACION])
            ->andFilterWhere(['like', 'TIPO_BENEFICIARIO', $this->TIPO_BENEFICIARIO])
            ->andFilterWhere(['like', 'PRIMER_APELLIDO', $this->PRIMER_APELLIDO])
            ->andFilterWhere(['like', 'SEGUNDO_APELLIDO', $this->SEGUNDO_APELLIDO])
            ->andFilterWhere(['like', 'NOMBRES', $this->NOMBRES])
            ->andFilterWhere(['like', 'NOMBRE_COMPLETO', $this->NOMBRE_COMPLETO])
            ->andFilterWhere(['like', 'FECHA_NACIMIENTO', $this->FECHA_NACIMIENTO])
            ->andFilterWhere(['like', 'SEXO', $this->SEXO])
            ->andFilterWhere(['like', 'FOLIO_ID_OFICIAL', $this->FOLIO_ID_OFICIAL])
            ->andFilterWhere(['like', 'CURP', $this->CURP])
            ->andFilterWhere(['like', 'RFC', $this->RFC])
            ->andFilterWhere(['like', 'CALLE', $this->CALLE])
            ->andFilterWhere(['like', 'NUM_EXT', $this->NUM_EXT])
            ->andFilterWhere(['like', 'NUM_INT', $this->NUM_INT])
            ->andFilterWhere(['like', 'MANZANA', $this->MANZANA])
            ->andFilterWhere(['like', 'LOTE', $this->LOTE])
            ->andFilterWhere(['like', 'ENTRE_CALLE', $this->ENTRE_CALLE])
            ->andFilterWhere(['like', 'Y_CALLE', $this->Y_CALLE])
            ->andFilterWhere(['like', 'OTRA_REFERENCIA', $this->OTRA_REFERENCIA])
            ->andFilterWhere(['like', 'LADA_TELEFONO', $this->LADA_TELEFONO])
            ->andFilterWhere(['like', 'TELEFONO', $this->TELEFONO])
            ->andFilterWhere(['like', 'LADA_FAX', $this->LADA_FAX])
            ->andFilterWhere(['like', 'FAX', $this->FAX])
            ->andFilterWhere(['like', 'COLONIA', $this->COLONIA])
            ->andFilterWhere(['like', 'LOCALIDAD', $this->LOCALIDAD])
            ->andFilterWhere(['like', 'AGEB', $this->AGEB])
            ->andFilterWhere(['like', 'CORREO_ELECTRONICO', $this->CORREO_ELECTRONICO])
            ->andFilterWhere(['like', 'MISMO_DOMICILIO', $this->MISMO_DOMICILIO])
            ->andFilterWhere(['like', 'CVE_RED_SOCIAL', $this->CVE_RED_SOCIAL])
            ->andFilterWhere(['like', 'RED_SOCIAL', $this->RED_SOCIAL])
            ->andFilterWhere(['like', 'TIPO_BENEFICIARIO_C', $this->TIPO_BENEFICIARIO_C])
            ->andFilterWhere(['like', 'PRIMER_APELLIDO_C', $this->PRIMER_APELLIDO_C])
            ->andFilterWhere(['like', 'SEGUNDO_APELLIDO_C', $this->SEGUNDO_APELLIDO_C])
            ->andFilterWhere(['like', 'NOMBRES_C', $this->NOMBRES_C])
            ->andFilterWhere(['like', 'NOMBRE_COMPLETO_C', $this->NOMBRE_COMPLETO_C])
            ->andFilterWhere(['like', 'FECHA_NACIMIENTO_C', $this->FECHA_NACIMIENTO_C])
            ->andFilterWhere(['like', 'SEXO_C', $this->SEXO_C])
            ->andFilterWhere(['like', 'FOLIO_ID_OFICIAL_C', $this->FOLIO_ID_OFICIAL_C])
            ->andFilterWhere(['like', 'CURP_C', $this->CURP_C])
            ->andFilterWhere(['like', 'RFC_C', $this->RFC_C])
            ->andFilterWhere(['like', 'MISMO_DOMICILIO_C', $this->MISMO_DOMICILIO_C])
            ->andFilterWhere(['like', 'CALLE_C', $this->CALLE_C])
            ->andFilterWhere(['like', 'NUM_EXT_C', $this->NUM_EXT_C])
            ->andFilterWhere(['like', 'NUM_INT_C', $this->NUM_INT_C])
            ->andFilterWhere(['like', 'MANZANA_C', $this->MANZANA_C])
            ->andFilterWhere(['like', 'LOTE_C', $this->LOTE_C])
            ->andFilterWhere(['like', 'ENTRE_CALLE_C', $this->ENTRE_CALLE_C])
            ->andFilterWhere(['like', 'Y_CALLE_C', $this->Y_CALLE_C])
            ->andFilterWhere(['like', 'OTRA_REFERENCIA_C', $this->OTRA_REFERENCIA_C])
            ->andFilterWhere(['like', 'LADA_TELEFONO_C', $this->LADA_TELEFONO_C])
            ->andFilterWhere(['like', 'TELEFONO_C', $this->TELEFONO_C])
            ->andFilterWhere(['like', 'LADA_FAX_C', $this->LADA_FAX_C])
            ->andFilterWhere(['like', 'FAX_C', $this->FAX_C])
            ->andFilterWhere(['like', 'COLONIA_C', $this->COLONIA_C])
            ->andFilterWhere(['like', 'LOCALIDAD_C', $this->LOCALIDAD_C])
            ->andFilterWhere(['like', 'AGEB_C', $this->AGEB_C])
            ->andFilterWhere(['like', 'CORREO_ELECTRONICO_C', $this->CORREO_ELECTRONICO_C])
            ->andFilterWhere(['like', 'CVE_RED_SOCIAL_C', $this->CVE_RED_SOCIAL_C])
            ->andFilterWhere(['like', 'RED_SOCIAL_C', $this->RED_SOCIAL_C])
            ->andFilterWhere(['like', 'STATUS_1', $this->STATUS_1])
            ->andFilterWhere(['like', 'STATUS_2', $this->STATUS_2])
            ->andFilterWhere(['like', 'USU', $this->USU])
            ->andFilterWhere(['like', 'PW', $this->PW])
            ->andFilterWhere(['like', 'IP', $this->IP])
            ->andFilterWhere(['like', 'FECHA_REG', $this->FECHA_REG])
            ->andFilterWhere(['like', 'USU_M', $this->USU_M])
            ->andFilterWhere(['like', 'PW_M', $this->PW_M])
            ->andFilterWhere(['like', 'IP_M', $this->IP_M])
            ->andFilterWhere(['like', 'FECHA_M', $this->FECHA_M]);

        return $dataProvider;
    }
}
