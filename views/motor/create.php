<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Motor */

$this->title = 'Tambahkan kendaraan';
$this->params['breadcrumbs'][] = ['label' => 'Motor', 'url' => ['/motor/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
