<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">MMS</span><span class="logo-lg">MMS</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <?= Yii::$app->user->isGuest ?
                        Html::a(
                            'Login',
                            ['/site/login'],
                            ['data-method' => 'post']
                        ) : 
                        Html::a(
                            'Logout',
                            ['/site/logout'],
                            ['data-method' => 'post']
                        )?>
                </li>
            </ul>
        </div>
    </nav>
</header>