<?php
/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'User';
?>

<h1>indexx</h1>
<a href="<?= $cdnUrl.'/index.php?r=user%2Fcropper'?>">cropper</a>
<a href="<?= $cdnUrl.'/index.php?r=user%2Fupload'?>">uploads</a>