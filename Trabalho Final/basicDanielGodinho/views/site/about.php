<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p style="color: red">Este é um trabalho realizado pela discilpina de Programação para Web.</p><br>

    <p>Date:<?php echo $data;?></p>
    
</div>
