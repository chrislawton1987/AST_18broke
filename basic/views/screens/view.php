<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Screens */

$this->title = $model->screenid;
$this->params['breadcrumbs'][] = ['label' => 'Screens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="screens-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->screenid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->screenid], [
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
            'screenid',
            'screenname',
            'stepid',
        ],
    ]) ?>

</div>
