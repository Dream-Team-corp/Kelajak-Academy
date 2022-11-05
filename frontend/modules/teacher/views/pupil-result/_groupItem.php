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
        <a class="btn btn-sm btn-primary" href="<?= Url::to(['pupil-result/create', 'group_id' => $model->id]) ?>">
            Yangi natija
        </a>
    </div>
    <div class="card-body p-0">
        <?=
        \yii\grid\GridView::widget([
            'dataProvider' => $model->result,
            'tableOptions' => [
                'class' => 'table'
            ],
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

</div>
