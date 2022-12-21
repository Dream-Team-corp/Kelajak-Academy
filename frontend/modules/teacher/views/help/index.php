<?php

$this->title = "Yordam bo'limi";

$this->params['breadcrumbs'][] = $this->title;

?>

<style>
    .time {
        animation-duration: 2s !important;
    }
</style>

<div class="row">
    <div class="col-md-10 offset-md-1 text-center">
        <h2 class=" text-primary">
            <!-- Bo'lim tayyorlanmoqda
            <div class="spinner-border text-primary time" role="status">
                <span class="sr-only">Loading...</span>
            </div> -->

        </h2>
        <p>
            <?= $this->render('_faq') ?>
        </p>
    </div>
</div>