<?php

use yii\grid\GridView;
use common\models\Bil;

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

    <div class="table-responsive">
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
                [
                    'attribute' => 'bill',
                    'label' => 'Oxirgi to\'lov',
                    'value' => function ($model) {
                        $bill = Bil::find()
                            ->where(['pupil_id' => $model->pupil->id, 'group_id' => $model->group_id])
                            ->orderBy(['id' => SORT_DESC])
                            ->one();

                        return (!empty($bill->created_at)) ? date('d / M / Y', $bill->created_at) : 'Qaydlar mavjud emas!';
                    },
                    'format' => 'html'
                ]

            ]
        ])
        ?>
    </div>

</div>
<?php
$this->registerJs('$(function() {$(".select2").select2();});');
?>