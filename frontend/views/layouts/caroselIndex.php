<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Dropdown;

$cdnUrl = Yii::$app->params['frontend'];
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title>binhkdc_training</title>
        <?php $this->head() ?>
        <?= $this->render('head') ?>
    </head>
    <body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

    <?= $this->render('nav')?>
    <main role="main" class="background-index">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
    </main>
    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
<?php $this->endPage();
