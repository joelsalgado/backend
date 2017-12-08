<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    $this->title = 'Panel de Control | Login';?>
    <div class="login_wrapper">
        <?php $form = ActiveForm::begin(['id' => 'login-form','method'=>'post']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => 'autofocus'])->label(false); ?>
                <?= $form->field($model, 'password')->passwordInput()->label(false); ?>
                <div class="form-group">
                <?= Html::submitButton(' Ingresar', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h5>Administración</h5>
                        <h2>SEDESEM</h2>
                    </div>
                </div>
        <?php ActiveForm::end(); ?>
    </div>