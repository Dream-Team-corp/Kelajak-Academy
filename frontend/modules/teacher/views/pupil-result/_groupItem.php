<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\VarDumper;

/**
 * @var $model \common\models\Group
 */
?>

<div class="card card-default">
    <div class="card-header d-flex justify-content-between">
        <h2 class="card-title"><?= $model->name ?></h2>
    </div>
    <div class="card-body">
        <?=
        \yii\grid\GridView::widget([
            'dataProvider' => $model->result,
            'summary' => '',
            'columns' => [
                [
                    'attribute' => 'F.I.SH',
                    'value' => function ($model) {
                        return $model->pupil->first_name . ' ' . $model->pupil->last_name;
                    }
                ],
                [
                    'attribute' => 'Test natijasi',
                    'value' => 'results'
                ],
                [
                    'attribute' => 'Bilim darajasi',
                    'value' => 'rating',
                    'format' => 'html'
                ]
            ]
        ])
        ?>
    </div>
    <div class="d-flex justify-content-between p-3">
        <b>Ochilgan sanasi: </b> <span> <?= date('d/m/Y', $model->created_at) ?></span>
    </div>
</div>
