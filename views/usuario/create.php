<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */

$this->title = 'Create Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
        body{
            background-image: url('<?= Yii::getAlias('@web')?>/img/createUsuario.png');
            background-size: 200px;
            background-repeat: no-repeat;
            background-position-y: 40px;
            background-position-x: center;
            background-color: #A2CED0;
        }
        .btn{
            border: none;
            outline: none;
        }
        h1{
            color: white;
        }
        p{
            color: yellow;
        }

</style>
<br><br><br><br><br><br>
<div class="d-flex justify-content-center align-items-center">
<div class="usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div>