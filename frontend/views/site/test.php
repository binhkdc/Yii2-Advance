<?php
use yii\helpers\Url;
$name= Yii::$app->params['name'];
$url = Url::to(['site/test', 'name' => $name]);
$index= Url::to(['site/index']);
$contact=  Url::to(['site/contact']);
$about= Url::to(['site/about']);
$login= Url::to(['site/login']);
$signup= Url::to(['site/signup']);
$welcome= Url::to(['site/welcome']);
?>
<?php if (!Yii::$app->user->isGuest){?>
    <?='<h1>Chào:'.Yii::$app->user->identity->username.'</h1>'?>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <b>Danh sánh link tại siteController</b><br>
            <p>Stt|Tên trang|Đường dẫn</p>
            <p>1|Trang chủ|<a><?= 'https://frontend.binhkdc_training.com/'.$index?></a></p>
            <p>2|Trang contact|<?= 'https://frontend.binhkdc_training.com/'.$contact?></p>
            <p>3|Trang about|<?= 'https://frontend.binhkdc_training.com/'.$about?></p>
            <p>4|Trang login|<?= 'https://frontend.binhkdc_training.com/'.$login?></p>
            <p>5|Trang signup|<?= 'https://frontend.binhkdc_training.com/'.$signup?></p>
            <p>6|Trang welcome|<?= 'https://frontend.binhkdc_training.com/'.$welcome?></p>
        </div>
        <div  class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p><b>QR CODE Của bạn</b></p>
            <img src="<?= yii::$app->user->identity->qr_image?>" title="Url By google" />
        </div>
    </div>
<?php }?>

