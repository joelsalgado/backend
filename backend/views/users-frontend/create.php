<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UsersFrontend */

$this->title = 'Crear Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Users Frontends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-frontend-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
