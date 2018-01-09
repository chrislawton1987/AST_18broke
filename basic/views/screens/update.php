<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Screens */

$this->title = 'Update Screens: ' . $model->screenid;
$this->params['breadcrumbs'][] = ['label' => 'Screens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->screenid, 'url' => ['view', 'id' => $model->screenid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="screens-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
