<?php

use app\models\Sensor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SensorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sensor';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
        body{
            background-image: url('<?= Yii::getAlias('@web')?>/img/fonn.jpg');
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

<div class="sensor-index">
    <br><br><br>
    <center>
    <h1><?= Html::encode($this->title) ?></h1>
    </center>
    <br><br>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class= 'fon'>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ubicacion',
            'estado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sensor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

</div>
</div>
