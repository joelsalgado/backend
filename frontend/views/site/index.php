<?php
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\web\Request;
$this->title = 'FUR';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">

                <?=
                Select2::widget([
                    'name' => 'id',
                    'data' => ArrayHelper::map($prog, 'PROGRAMA', 'PROGRAMA'),
                    'options' => [
                        'placeholder' => 'Selecciona un Programa',

                    ],
                ])
                ?>
            </div>
            <div class="col-lg-6">
                <?=
                Select2::widget([
                    'name' => 'id',
                    'data' => ArrayHelper::map($periodo, 'N_PERIODO', 'DESC_PERIODO'),
                    'options' => [
                        'placeholder' => 'Selecciona un Periodo',

                    ],
                ])
                ?>
            </div>

            <?php
            $request = New Request;
            $ip = $request->getUserIp();
            echo $ip;
            ?>




        </div>

    </div>
</div>
