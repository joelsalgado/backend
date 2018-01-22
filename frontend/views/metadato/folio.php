<?php
/**
 * Created by PhpStorm.
 * User: Joel Salgado
 * Date: 22/01/2018
 * Time: 10:35 AM
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
$this->title = 'Registro Finalizado';

?>
<div class="finalizado">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Registro Finalizado</h3>
        </div>
        <div class="box-body">
            <p>
                <?= Html::a('Nuevo Solicitante', ['municipio'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'summary' => "Mostrando {begin}-{end} de {totalCount} elementos",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'N_PERIODO',
                    //'CVE_PROGRAMA',
                    'FOLIO',
                    //'CONSECUTIVO',
                    //'FOLIO_FUR',
                    //'FOLIO_RELACIONADO',
                    //'PRIMER_APELLIDO',
                    //'SEGUNDO_APELLIDO',
                    //'NOMBRES',
                    'NOMBRE_COMPLETO',
                    'FECHA_NACIMIENTO',
                    //'NUMERO_HIJOS',
                    'SEXO',
                    //'CVE_ESTADO_CIVIL',
                    //'CVE_GRADO_ESTUDIOS',
                    //'CVE_PARENTESCO',
                    'CURP',
                    //'CVE_NACIONALIDAD',
                    //'CVE_LUGAR_NACIMIENTO',
                    //'CORREO_ELECTRONICO',
                    //'FOLIO_ID_OFICIAL',
                    //'CVE_ACTIVIDAD_LABORAL',
                    //'ASISTE_ESC',
                    //'CVE_DISCAPACIDAD',
                    //'SABELEER',
                    //'STATUS_2',
                    'FECHA_REG',
                    //'USU',
                    //'PW',
                    //'IP',
                    //'FECHA_M',
                    //'USU_M',
                    //'PW_M',
                    //'IP_M',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'header' => 'Acciones',
                        'headerOptions' => ['style' => 'color:#337ab7'],
                        'template' => '{update}{borrar}',
                        'buttons' => [
                            'update' => function ($url, $model) {
                                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                    'title' => Yii::t('app', 'editar'),
                                ]);
                            },
                        ],
                        'urlCreator' => function ($action, $model, $key, $index) {
                            if ($action === 'update') {
                                $url ='/metadato/update?id='.$model->FOLIO.'&mun='.$model->CVE_MUNICIPIO;
                                return $url;
                            }
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>

