<?php

use app\models\Accion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AccionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = "ACCIONES";
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    body {
        background-image: url('<?= Yii::getAlias('@web')?>/img/casas.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }

    .accion-index{
        background-color: rgba(255, 255, 255, 0.6);
        border-radius: 20px;
        padding: 30px;
    }

    h1, h3, p {
        color: white;
    }
</style>
<div class="accion-index">

    <h1 align="center" style="color: black;"><?= Html::encode($this->title) ?></h1>

    <!--<p>
        <?= Html::a('Create Accion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha',
            'hora',
            'id_usuario',
            'id_sensor',
            //'accion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Accion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'template' => '{view}      {delete}'
            ],
           // ['class' => 'yii\grid\ActionColumn', 'template' => '{view}{update}'],
        ],
    ]); ?>


</div>