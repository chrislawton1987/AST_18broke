<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Video */

$this->title = 'Update Video: ' . $model->videoid;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->videoid, 'url' => ['view', 'id' => $model->videoid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="video-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
