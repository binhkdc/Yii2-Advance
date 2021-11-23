<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'avatar')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
<?= Html::submitButton('Lưu', ['class' => 'btn btn-primary', 'id' => 'submitFileUpload']) ?>
<?php ActiveForm::end() ?>