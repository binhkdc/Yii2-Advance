<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PostForm */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="post-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?php if (!Yii::$app->user->isGuest) {?>
    <?= $form->field($model, 'admin')->textInput(['maxlength' => true,'value'=> Yii::$app->user->identity->username,'readonly'=>true]) ?>
    <?php }?>
    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created')->textInput(['value'=> date('Y-m-d H:i:s'),'readonly'=>true]) ?>

    <?= $form->field($model, 'updated')->textInput(['value'=> date('Y-m-d H:i:s'),'readonly'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
