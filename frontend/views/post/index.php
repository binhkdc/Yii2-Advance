<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Post Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-form-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
            'admin',
            'content',
            'status',
            'created',
            //'updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
