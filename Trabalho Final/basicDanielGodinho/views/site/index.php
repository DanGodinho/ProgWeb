<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

use yii\helpers\Html;


Html::a('Home', ['site/index']);

?>
<div class="site-index">

    <div class="jumbotron">
        <?= Html::img('@web/images/icomp.png',['align'=>'left']); ?>
        <h1>Instituto de Computação</h1>
        

        <!--<p class="lead">You have successfully created your Yii-powered application.</p>-->

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

       
        </div>

    </div>
</div>
