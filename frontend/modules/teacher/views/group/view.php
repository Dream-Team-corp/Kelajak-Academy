<?php

use yii\grid\GridView;
use common\models\Bil;
use yii\grid\ActionColumn;
use yii\helpers\Url;
use yii\helpers\Html;

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
                ],
                [
                    'class' => ActionColumn::class,
                    'template' => '{update}{delete}',
                    'header' => 'Amallar',
                    'buttons' => [
                        'update' => function ($url, $model) {
                            $gr_id = Yii::$app->request->get('id');
                            $url = Url::to(['/teacher/group/update-pupil', 'pupil_id' => $model->pupil->id, 'id' => $gr_id]);
                            return Html::a('<span class="fa fa-pen"></span>', $url, ['title' => 'tahrirlash', 'class' => 'btn btn-primary btn-sm']);
                        },
                        'delete' => function ($url, $model) {
                            $gr_id = Yii::$app->request->get('id');
                            $url = Url::to(['/teacher/group/delete-pupil', 'id' => $model->pupil->id, 'group_id' => $gr_id]);
                            return Html::a('<span class="fa fa-trash"></span>', $url, ['title' => 'o\'chirish', 'class' => 'btn btn-danger ml-md-1 btn-sm', 'data-method' => 'post']);
                        },
                    ]
                ]

            ]
        ])
        ?>
    </div>

</div>
<?php
$this->registerJs('$(function() {$(".select2").select2();});');
?>