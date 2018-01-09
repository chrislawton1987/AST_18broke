<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserrolesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userroles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userroles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userroles', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userrolesid',
            'rolename',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
