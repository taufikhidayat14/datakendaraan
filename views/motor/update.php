<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Motor */

$this->title = 'Update Motor: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['/motor/index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="motor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
