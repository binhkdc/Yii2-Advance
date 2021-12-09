<?php
use frontend\assets\AppAsset;
use yii\bootstrap5\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Dropdown;

$cdnUrl = Yii::$app->params['frontend'];
AppAsset::register($this);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand fa-2x" href="<?= $cdnUrl . '/index.php?r=site%2Fwelcome' ?>"><i
                class="fab fa-kickstarter-k"></i><i class="fab fa-dyalog"></i><i class="fab fa-cuttlefish"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= $cdnUrl . '/index.php' ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $cdnUrl . '/index.php?r=site%2Fcontact' ?>">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="ml-auto navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <?php
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                    } else {?>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small text-white"><?= Yii::$app->user->identity->username?></span>
                        <img class="img-profile rounded-circle rounded-pill" style="width:40px;"
                             src="<?= $cdnUrl.'/'.Yii::$app->user->identity->avatar?>" alt="avatar">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= $cdnUrl.'/index.php?r=user'?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <?php $menuItems[] = '<p>'
                                . Html::beginForm(['/site/logout'], 'post', ['class' => ''])
                                . '<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>'
                                . Html::submitButton('Logout', ['class' => 'btn btn-link logout'])
                                . Html::endForm()
                                .'</p>';
                            }
                            echo Nav::widget([
                                'options' => ['class' => 'active'],
                                'items' => $menuItems,
                            ]); ?>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
