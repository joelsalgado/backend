<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Usuario: '.$model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= \yiister\gentelella\widgets\FlashAlert::widget(['showHeader' => true]) ?>
<div class="user-update">

    <h1 class="titulo"><?= Html::encode($this->title) ?></h1>
  	<div class="panel">
        <div class="panel-body">
		   <div class="user-form">

		       <?php $form = ActiveForm::begin(); ?>
		       <?= $form->field($newPass, 'oldPassword')->passwordInput(['value' => '']) ?>
		       <?= $form->field($newPass, 'password')->passwordInput(['value' => '']) ?>
		       <?= $form->field($newPass, 'passwordRepeat')->passwordInput(['value' => '']) ?>
		       

		       <div class="form-group">
		           <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		           <?php  echo Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
		       </div>

		       <?php ActiveForm::end(); ?>

		   </div>
		</div>
	</div>
	
</div>