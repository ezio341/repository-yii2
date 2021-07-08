<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Selamat Datang di Mahasiswa Manajemen Sistem!</h1>

        <?= Yii::$app->user->isGuest ?
            '<p class="lead">Silahkan login jika anda Admin</p>
            <p><a class="btn btn-lg btn-success" href="login">Go to Login</a></p>' 
            : 
            '<p class="lead">Welcome Back Admin.</p>'
        ?>

    </div>

    <div class="body-content text-justify">

        <div class="row">
            <div class="col-lg-4">
                <h2>Manajemen Mahasiswa</h2>

                <p>Kelola data Mahasiswa JTI dengan mudah.</p>

                <p><a class="btn btn-outline-secondary" href="../mahasiswa">Manajemen Mahasiswa &raquo;</a></p>
            </div>
        </div>

    </div>
</div>