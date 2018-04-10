<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Motor */

$this->title = $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['/motor/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no',
            'NIM',
            'NAMA',
            'NOPOL',
            'NORANGKA',
        ],
    ]) ?>

</div>
