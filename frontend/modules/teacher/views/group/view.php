<?php

use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\Group $model */

$this->title = 'O\'quvchilar ro\'yhati';
$this->params['breadcrumbs'][] = ['label' => 'Guruhlarim', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<style>
    .select2-selection__choice {
        background-color: blue !important;
    }
</style>
<?= $this->render('add-pupil', ['model' => $pupils]) ?>
<div class="card card-success p-3">

    <?=
    GridView::widget([
        'dataProvider' => $model,
        'summary' => false,
        'tableOptions' => [
            'class' => 'table table-bordered',
            'id' => 'all-pupil'
        ],
        'columns' => [
            [
                'attribute' => 'fish',
                'label' => 'F.I.SH',
                'value' => function ($model) {
                    return $model->pupil->last_name . ' ' . $model->pupil->first_name;
                }
            ],
            [
                'attribute' => 'phone',
                'label' => 'Telefon Raqami',
                'value' => 'pupil.tel_number'
            ],

            [
                'attribute' => 'username',
                'label' => 'Foydalanuvchi nomi',
                'value' => 'pupil.username'
            ],
            [
                'attribute' => 'password',
                'label' => 'Parol',
                'value' => 'pupil.username'
            ],
            'created_at:date',
            [
                'attribute' => 'bill',
                'label' => 'Oxirgi to\'lov',
                'value' => 'pupil.bill.created_at',
                'format' => 'Date'
            ]

        ]
    ])
    ?>

</div>
<?php
$this->registerJs('$(function() {$(".select2").select2();});');
?>