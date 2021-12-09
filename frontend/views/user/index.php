<?php
/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'User';
?>
<style>
    .avatar{
        width: 50%;
        border: 2px solid black;
    }
</style>
<div class="row">
    <?php if (!Yii::$app->user->isGuest){?>
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <?='<h1>Chào:'.Yii::$app->user->identity->username.'</h1>'?>
            <img src="https://frontend.binhkdc_training.com/<?=Yii::$app->user->identity->avatar?>" class="avatar" alt="avatarUser"><br>
            <a href="<?= $cdnUrl.'/index.php?r=user%2Fcropper'?>">cropper</a>
            <a href="<?= $cdnUrl.'/index.php?r=user%2Fupload'?>">uploads</a>
        </div>
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <p><b>QR CODE Của bạn</b></p>
            <img src="<?= yii::$app->user->identity->qr_image?>" title="Url By google  " />
        </div>
    <?php }?>
</div>
