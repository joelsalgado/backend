<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use frontend\widgets\Apartados\Apartados;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Integrantes del Hogar ';

?>
<div class="familia-index">

    <div class="box">
        <?=
        Apartados::widget([
            'tipo'=>4,
            'apartado' => $apartados,
            'id' => $id,
            'mun' => $mun
        ])
        ?>
        <div class="box-header with-border">
            <h3 class="box-title">CARACTERÍSTICAS SOCIODEMOGRÁFICAS </h3>
        </div>
        <div class="box-body">
            <?php Pjax::begin(); ?>

            <p>
                <?= Html::a('Agregar integrante', ['create', 'id'=>$id], ['class' => 'btn btn-success']) ?>
                <?php if ($boton == 'true'){ ?>
                <?= Html::a('FINALIZAR REGISTRO', ['/metadato/folio', 'id'=>$id], ['class' => 'btn btn-danger']) ?>
                <?php } ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'summary' => "Mostrando {begin}-{end} de {totalCount} elementos",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'N_PERIODO',
                    //'CVE_PROGRAMA',
                    //'FOLIO',
                    'CONSECUTIVO',
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
                    //'FECHA_REG',
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
                            'borrar' => function ($url, $model) {
                                return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                                    'title' => Yii::t('app', 'borrar'),
                                ]);
                            }


                        ],
                        'urlCreator' => function ($action, $model, $key, $index) {
                            if ($action === 'update') {
                                $url =Yii::$app->homeUrl.'familia/update?id='.$model->FOLIO.'&folio='.$model->FOLIO_FUR;
                                return $url;
                            }
                            if ($action === 'borrar') {
                                $url =Yii::$app->homeUrl.'familia/delete?id='.$model->FOLIO.'&folio='.$model->FOLIO_FUR;
                                return $url;
                            }
                        }
                    ],
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
