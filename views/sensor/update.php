<?php 

//use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sensor $model */

$this->title = 'Update Sensor: ' . $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Sensors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update'; 


use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Movimientos;
use app\models\Sensor;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Movimientos $model */

/** @var yii\web\View $this */
/** @var app\models\Sensor $model */
/** @var yii\widgets\ActiveForm $form */

/** @var app\models\SensorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Yii Application';

?>
<style>
    body {
        background-image: url('<?= Yii::getAlias('@web')?>/img/fonn.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    h1, h2, h3, p {
        color: white;
    }
</style>


    <center>
        <br><br>
        <br><br><br><h1>Control del Sensor</h1>
        <br><br><h3>SunLinkSystems LTD</h3>
        <br>
        <h2>El Sensor esta <?php
            $model = Sensor::findOne(['id' => 1]);  ?>
            <?=
             $model->estado==1? 'Encendido' : 'Apagado' 
            ?></h2><br><br>
        <div class="sensor-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div> 
    </center>
</div>
