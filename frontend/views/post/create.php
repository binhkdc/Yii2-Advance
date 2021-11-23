<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PostForm */

$this->title = 'Create Post Form';
$this->params['breadcrumbs'][] = ['label' => 'Post Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="post-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
