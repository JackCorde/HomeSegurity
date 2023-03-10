<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>
        body{
            background-image: url('<?= Yii::getAlias('@web')?>/img/vista.jpeg');
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
            
        }
        

</style>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<div class="fon">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nom',
            'ap',
            'am',
            'correo',
            'pass',
            'tel',
            'tipo',
        ],
    ]) ?>

</div>
</div>