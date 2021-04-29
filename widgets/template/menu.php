<?php

use yii\helpers\Url;

?>

<div class="container">
    <nav class="nav nav-menu">
        <a class="nav-link" href="/">Всё меню</a>
        <?php foreach ($data as $id) : ?>
            <a class="nav-link" data-id="<?=$id['cat_name']?>"
               href="<?= Url::to(['category/view', 'id' => $id['cat_name']]) ?>"><?= $id['browser_name']; ?>
            </a>
        <?php endforeach; ?>
    </nav>
</div>
