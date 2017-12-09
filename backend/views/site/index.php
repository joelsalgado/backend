<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        
         <?php if(isset($_SESSION['permissions'])):?>
                                    <h1>Congratulations!</h1>
                                <?php endif;?>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <?= Yii::$app->params['sequenceUsers']; ?>

    </div>
</div>
