<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StepsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Steps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="steps-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Steps', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stepid',
            'stepname',
            'userid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
