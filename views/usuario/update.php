<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */

$this->title = 'Update Usuario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<style>
        body{
            background-image: url('<?= Yii::getAlias('@web')?>/img/update.jpg');
            background-size: cover;
        }
        .btn{
            border: none;
            outline: none;
        }
        h1, h2, h3, h4, h5, h6, p {
            color: white;
        }
        .fon{
            background-color: white;
            width: 60%;
            padding: 6px 15px;
            margin: 1px 0;
            display: inline-block;
            border-radius: 10px;
            box-sizing: border-box;
            padding: 10;
        }       
        

</style>
<center><div class="usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="fon">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</center>