<?php
$cdnUrl = Yii::$app->params['frontend'];?>
<!-- partial:index.partial.html -->

<head>
    <meta charset="UTF-8">
    <title>CodePen - cropper JS</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css'>
    <link rel='stylesheet' href="<?= $cdnUrl.'/css/cropper.css'?>">

</head>

<main>
    <h2>Upload ,Crop and save.</h2>
    <!-- input file -->
    <div class="box">
        <input type="file" id="file-input">
    </div>
    <!-- leftbox -->
    <div class="box-2">
        <div class="result"></div>
    </div>
    <!--rightbox-->
    <div class="box-2 img-result hide">
        <!-- result of crop -->
        <img class="cropped" src="" alt="">
    </div>
    <!-- input file -->
    <div>
        <div class="options hide">
            <label> Width</label>
            <input type="number" class="img-w" value="300" min="100" max="1200" />
        </div>
        <!-- save btn -->
        <button class="btn save hide">Save</button>
        <!-- download btn -->
        <a href="" class="btn download hide">Download</a>
    </div>
</main>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js'></script><script  src="./script.js"></script>

<!-- partial -->
<script src="<?='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js'?>"></script>
<script  src="<?= $cdnUrl .'/css/js/Cropper.js'?>"></script>