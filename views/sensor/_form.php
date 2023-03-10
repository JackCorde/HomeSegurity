<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Sensor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sensor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= //$form->field($model, 'ubicacion')->textInput(['maxlength' => true]); 
        $form->field($model, 'ubicacion')->hiddenInput()->label(false);
    ?>

    <?= //$form->field($model, 'estado')->textInput()
        $form->field($model, 'estado')->hiddenInput()->label(false);
    ?>
    <center>
    <div class="form-group">
        <?= Html::submitButton('Encender / Apagar', ['class' => 'btn btn-success']) ?>
    </div>
    </center>

    <?php ActiveForm::end(); ?>

</div>