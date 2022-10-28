<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="card card-primary card-outline">
    <div class="card-header d-flex justify-content-between">
        <h2 class="card-title"><?= $model->name ?></h2>
        <a href="<?= Url::to(['/teacher/course/view', 'id' => $model->course_id]) ?>">Kurs reklamasi</a>
    </div>
    <div class="card-body">
        <b>Kurs vaqtlari</b>
        <table class="table">
            <tr>
                <th>Dushanba</th>
                <td>12:00</td>
            </tr>
            <tr>
                <th>Dushanba</th>
                <td>12:00</td>
            </tr>
            <tr>
                <th>Dushanba</th>
                <td>12:00</td>
            </tr>
        </table>
        <a href="<?= Url::to(['view', 'id' => $model->id]) ?>" class="btn btn-block btn-primary btn-flat mt-3">
            O'quvchilar ro'yhati <i class="fas fa-angle-right ml-1"></i>
        </a>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
        <a href="" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>
        <?= Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="d-flex justify-content-between p-3">
        <b>Ochilgan sanasi: </b> <span> <?= date('d/m/Y', $model->created_at) ?></span>
    </div>
</div>