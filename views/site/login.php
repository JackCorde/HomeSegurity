<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;



?>
<br>
<div class="login-box rounded bg-light p-4" style="opacity: 0.9; border: 1px solid #ccc; margin: 0 auto; max-width: 500px;">
<br><br>
<div class="d-flex justify-content-center align-items-center">
    <?php echo Html::img('@web/img/user.png', ['alt' => 'User', 'style' => 'width: 30%']); ?>
</div><br>
<div class="site-login d-flex justify-content-center align-items-center">

    <style>
         
        body {
            background-image: url('<?= Yii::getAlias('@web')?>/img/fonlog.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        h1, h3, p {
            color: white;
        }
        .form-check label {
        color: grey;
        }
        .login-button {
        background-image: url('<?= Yii::getAlias('@web')?>/img/fonlog.jpg');
         background-size: cover;
         background-repeat: no-repeat;
         }
         .btn-primary {
          border: none;
          outline: none;
          }

          .rounded.bg-light.p-4 {
           background-color: rgba(255, 255, 255, 0.9);
           }
           .login-box {
                width: 400px;
                height: 500px;
                margin: 0 auto;
            }


    </style>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'inline',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'sr-only'],
            'inputOptions' => ['class' => 'form-control mb-2 me-2 mb-lg-0', 'style' => 'max-width: 350px;'],
            'errorOptions' => ['class' => 'invalid-feedback'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>
    <br>

    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"form-check mb-2 me-2 mb-lg-0 text-center\">\n{input} {label}\n</div>\n{error}",
    ]) ?>

    <div class="form-group text-center mt-3">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary bg-success login-button']) ?>
    </div>
</div>



    <?php ActiveForm::end(); ?>
</div>