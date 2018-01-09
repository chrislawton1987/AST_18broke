<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BoxSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Boxes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Box', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'boxnoid',
            'boxnumber',
            'screenid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
