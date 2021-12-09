<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */


//$this->params['breadcrumbs'][] = ['label' => 'Post Forms', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

<?= Html::submitButton('Lưu', ['class' => 'btn btn-primary', 'id' => 'submitFileUpload']) ?>

<?php ActiveForm::end() ?>

