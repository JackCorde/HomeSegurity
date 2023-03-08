<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Accion $model */

$this->title = 'Create Accion';
$this->params['breadcrumbs'][] = ['label' => 'Accions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
