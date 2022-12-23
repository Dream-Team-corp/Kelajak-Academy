<?php

use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\widgets\ListView;

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
<section class="content">

            <?= ListView::widget([
                 'dataProvider' => $model,
                 'itemView' => '_faq',
                 'layout' => "{items}",
                 'options' => [
                     'class' => 'row'
                 ],
                 'itemOptions' => [
                     'class' => 'col-12',
                     'id'=> 'accordion'
                 ],
                 
            ]) ?>
            <div class="row">
            <div class="col-12 mt-3 text-center">
                <p class="lead">
                    <a href="<?=Url::to('form')?>">Biz bilan bog'lanish</a>,
                    Agar to'g'ri javob topmagan bo'lsangiz yoki boshqa savolingiz bo'lsa?<br />
                </p>
            </div>
        </div>
</section> 

        </p>
    </div>
</div>