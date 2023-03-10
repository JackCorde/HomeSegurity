<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Movimientos;
use app\models\Sensor;


/** @var app\models\Sensor $model */

/** @var yii\web\View $this */
/** @var app\models\Movimientos $model */

$this->title = 'My Yii Application';

if(Yii::$app->user->isGuest){
?>
<style>
    body {
        background-image: url('<?= Yii::getAlias('@web')?>/img/fonn.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    h1, h3, p {
        color: white;
    }
</style>


    <center>
        <br><br>
        <br><br><br><h1>Home Segurity</h1>
        <br><br><h3>SunLinkSystems LTD</h3>
        <br><br><br>
        <p>
            <?= Html::a('Iniciar', ['/site/login'], ['class' => 'btn btn-primary']) ?>
        </p>
    </center>
</div>
<?php
}else{
    switch(Yii::$app->user->identity->tipo){
        case 'Administrador':
?>
<style>
    body {
        background-image: url('<?= Yii::getAlias('@web')?>/img/fondo_admin.png');
        background-size: cover;
    }

    h1, h2, h3, p {
        color: white;
    }

    .fon{
        background-color: white;
    }
</style>
    <center>
        <br><br><br><h1>Bienvenido Administrador <?= Yii::$app->user->identity->nom ?> a Home Segurity</h1>
        <br><br><h3>SunLinkSystems LTD</h3>
        <br><br>
        <h2>El Sensor esta <?php
            $model = Sensor::findOne(['id' => 1]);  ?>
            <?=
             $model->estado==1? 'Encendido' : 'Apagado' 
            ?></h2>
        <br>
        
    </center>
    <br><br>

    <h3>
        <?= Html::encode('Movimientos Registrados') ?>
    </h3>
    <div class="fon">
    <?php 
        $especialidadProvider=new ActiveDataProvider([
            'query' => Movimientos::find(),
            'pagination' => ['pageSize' => 10, ],
        ]);

            echo GridView::widget([
                'dataProvider' => $especialidadProvider, // Poblar el gridview
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'fecha',
                    'hora',
        
        
            // Agregar por cada registro un link para solicitar alguna acción a un controlador
                    [
                        "attribute" => "Opciones",
                        "format" => "raw",
                        "value" => function ($model) {
                            return Html::a(
                                "<center><p style='color: black;'>Ver mas...</p></center>",
                                "index.php?r=movimientos/view&id=".$model->id);
                        },
                    ],
                ],
            ]);
    ?>
    </div>
    

</div>
<?php
        ;break;
        case 'Usuario':
?>
<style>
    body {
        background-image: url('<?= Yii::getAlias('@web')?>/img/backgroundUsuario.png');
        background-size: cover;
    }

    h1, h2, h3, p {
        color: white;
    }

    .fon{
        background-color: white;
    }
</style>

    <center>
        <br><br><br><h1>Bienvenido Usuario <?= Yii::$app->user->identity->nom ?> a Home Segurity</h1>
        <br><br><h3>SunLinkSystems LTD</h3>
        <br><br>
        <h2>El Sensor esta <?php
            $model = Sensor::findOne(['id' => 1]);  ?>
            <?=
             $model->estado==1? 'Encendido' : 'Apagado' 
            ?></h2>
        <br>
        
        <br>
    </center>
    <h3>
        <?= Html::encode('Movimientos Registrados') ?>
    </h3>
    <div class="fon">
    <?php 
        $especialidadProvider=new ActiveDataProvider([
            'query' => Movimientos::find(),
            'pagination' => ['pageSize' => 10, ],
        ]);

            echo GridView::widget([
                'dataProvider' => $especialidadProvider, // Poblar el gridview
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'fecha',
                    'hora',
        
        
            // Agregar por cada registro un link para solicitar alguna acción a un controlador
                    [
                        "attribute" => "Opciones",
                        "format" => "raw",
                        "value" => function ($model) {
                            return Html::a(
                                "<center><p style='color: black;'>Ver mas...</p></center>",
                                "index.php?r=movimientos/view&id=".$model->id);
                        },
                    ],
                ],
            ]);
    ?>
    </div>
    </div>
 
<?php
        ;break;
    }
}
?>


