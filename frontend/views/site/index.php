<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <?php if (!Yii::$app->user->isGuest): ?>
            <div class="row">
               <p>Ваш Email: <b><?= $tree->user->email ?></b></p>
               <p>Ваш Партнерский ID: <b><?= $tree->user->partner_id ?></b></p>
               <p>ID под которым Вы зарегистрованы: <b><?= $tree->parents(1)->one()->user->partner_id; ?></b></p>
                <ul>
                    <?php foreach ($tree->children()->all() as $children): ?>
                        <li><?= $children->user->username ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>
