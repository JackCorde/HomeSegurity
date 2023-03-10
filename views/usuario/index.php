<?php

use app\models\Usuario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UsuarioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
        body{
            background-image: url('<?= Yii::getAlias('@web')?>/img/Fondo.jpg');
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
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class= 'fon'>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nom',
            'ap',
            'am',
            'correo',
            //'pass',
            //'tel',
            //'tipo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Usuario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

</div>
</div>