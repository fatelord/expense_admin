<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models_extended\LOGIN_MODEL */

$this->title = 'Create Login  Model';
$this->params['breadcrumbs'][] = ['label' => 'Login  Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login--model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
