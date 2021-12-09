<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'BinhKDC index';
$name = Yii::$app->params['name'];
$url = Url::to(['site/test', 'name' => $name]);
$urlPost = Url::to(['post/index']);
$cdnUrl = Yii::$app->params['frontend'];
?>
<header>
    <div class="container">

        <div class="site-index text-white">

            <div class="jumbotron text-center bg-transparent">
                <h1 class="display-4">Congratulations!</h1>

                <p class="lead">You have successfully created your Yii-powered application.</p>
                <p><a class="btn btn-lg btn-success" href="<?= $url ?>">Liệt kê</a></p>
                <p><a class="btn btn-lg btn-success" href="<?= $urlPost ?>">Danh sách sản phẩm</a></p>
                <p><a class="btn btn-lg btn-success" href="<?= Url::to(['site/manage']) ?>">Quan ly</a></p>
            </div>

            <div class="body-content">

                <div class="row">
                    <div class="col-lg-4">
                        <h2>Heading</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu
                            fugiat nulla pariatur.</p>

                        <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii
                                Documentation &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <h2>Heading</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu
                            fugiat nulla pariatur.</p>

                        <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum
                                &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <h2>Heading</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu
                            fugiat nulla pariatur.</p>

                        <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii
                                Extensions &raquo;</a></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</header>
