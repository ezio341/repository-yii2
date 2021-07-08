<?php

use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <?=Yii::$app->user->isGuest?"<p>Guest</p>":"<p>Administrator</p>" ?>
            </div>
        </div>

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => '<i class="fa fa-home"></i><span>Home</span>', 'url' => ['site/index']],
                    ['label' => '<i class="fa fa-file-code-o"></i><span>Mahasiswa</span>', 'url' => ['mahasiswa/index']],
                    ['label' => '<i class="fa fa-info"></i><span>About</span>', 'url' => ['site/about']]
                ],
            ]
        );
        ?>

    </section>

</aside>