<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userroles */

$this->title = 'Update Userroles: ' . $model->userrolesid;
$this->params['breadcrumbs'][] = ['label' => 'Userroles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userrolesid, 'url' => ['view', 'id' => $model->userrolesid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userroles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
