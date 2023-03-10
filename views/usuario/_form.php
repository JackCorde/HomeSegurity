<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */
/** @var yii\widgets\ActiveForm $form */
?>
<center>
    <div class="fon">
<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'ap')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'am')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'pass')->passwordInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
<br>
    <?= $form->field($model, 'tipo')->dropDownList([ 'Administrador' => 'Administrador', 'Usuario' => 'Usuario', ], ['prompt' => '']) ?>
<br>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>
    </center>
    </div>
</div>