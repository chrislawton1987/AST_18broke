<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userroles */

$this->title = $model->userrolesid;
$this->params['breadcrumbs'][] = ['label' => 'Userroles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userroles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->userrolesid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->userrolesid], [
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
            'userrolesid',
            'rolename',
        ],
    ]) ?>

</div>
