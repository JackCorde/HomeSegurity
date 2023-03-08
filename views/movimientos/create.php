<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Movimientos $model */

$this->title = 'Create Movimientos';
$this->params['breadcrumbs'][] = ['label' => 'Movimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
        body{
            background-image: url('<?= Yii::getAlias('@web')?>/img/fonnMov.jpg');
            background-size: cover;
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
<br><br><br><br><br><br><br><br>
<div class="d-flex justify-content-center align-items-center">
<div class="movimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div>
