<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Movimientos $model */
/** @var yii\widgets\ActiveForm $form */

date_default_timezone_set('America/Mexico_City');
?>


<div class="d-flex justify-content-center align-items-center">
<div class="movimientos-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->hiddenInput(['value' => date('Y-m-d')])->label(false) ?>

    <?= $form->field($model, 'hora')->hiddenInput(['value' => date('h:i:s')])->label(false) ?>

    <?= $form->field($model, 'id_sensor')->hiddenInput(['value' => 1])->label(false) ?>

    <?= Html::submitButton('Movimiento', ['class' => 'btn btn-light btn-lg']) ?>



    <?php ActiveForm::end(); ?>
</div>

</div>
