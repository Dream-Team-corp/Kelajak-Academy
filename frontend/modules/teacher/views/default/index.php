<?php

use yii\bootstrap4\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\grid\ActionColumn;

/** @var $bill \common\models\Bil
 * * @var  $groups \common\models\Group
 * * @var $about \common\models\TeacherAbout
 */

$this->title = "O'qituvchi - " . Yii::$app->user->identity->first_name;
$assetDir = Yii::getAlias('@defaultImage');;

?>
<style>
    .fpos {
        position: relative !important;
    }

    .pos {
        position: absolute !important;
        top: 0;
        right: 0;
    }

    .fsx {
        font-size: 25px !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card card-widget widget-user">
            <div class="widget-user-header bg-primary fpos">
                <a href="<?= Url::to(['/teacher/default/profile-setting']) ?>" class="btn btn-warning btn-sm pos"
                   title="tahrirlash"> <i class="fa fa-pen"></i> </a>
                <h3 class="widget-user-username">
                    <?= Yii::$app->user->identity->first_name ?>
                    <?= Yii::$app->user->identity->last_name ?>
                </h3>
                <h5 class="widget-user-desc">
                    <?= $about->job ?>
                </h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?= $assetDir ?>/<?= $about->image ?>" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block  text-justify">
                            <h3 class="text-center">Men haqimda</h3>
                            <span class="text-left">
                                <?= $about->about ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-right">
                        <div class="description-block  text-justify">
                            <h3 class=" text-center">Ta'lim</h3>
                            <span class="text-left">
                                <?= $about->education ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="description-block text-justify">
                            <h3 class="text-center">Tajribam</h3>
                            <span>
                                <?= $about->experience ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around mt-3">
                    <?= $about->socialLink ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-success">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Oxirgi to'lovlar</h3>

                <a href="<?= Url::to(['/teacher/bil/index']) ?>" class="btn btn-sm btn-flat btn-primary">Barchasi</a>
            </div>
            <div class="table-responsive">
                <?=
                GridView::widget([
                    'dataProvider' => $bill,
                    'summary' => false,
                    'tableOptions' => [
                        'class' => 'table',
                    ],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id',
                        [
                            'attribute' => 'pupil_id',
                            'label' => 'F.I.SH',
                            'value' => function ($model) {
                                return $model->pupil->first_name . ' ' . $model->pupil->last_name;
                            }
                        ],
                        [
                            'attribute' => 'group_id',
                            'value' => 'group.name'
                        ],
                        // 'teacher_id',
                        [
                            'attribute' => 'how_much',
                            'value' => function ($model) {
                                return number_format($model->how_much, '0', ' ', ' ') . ' So\'m';
                            }
                        ],
                        // [
                        //     'attribute' => 'type',
                        //     'value' => 'typeLabel',
                        //     'format' => 'html'
                        // ],
                        [
                            'attribute' => 'created_at',
                            'format' => 'date',
                        ],
                        [
                            'class' => ActionColumn::class,
                            'urlCreator' => function ($action, $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            },
                            'template' => '{update} {delete}',
                        ],

                    ],
                ])
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-outline card-primary">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Guruhlar ro'yhati</h3>

                <a href="<?= Url::to(['/teacher/group/index']) ?>" class="btn btn-sm btn-flat btn-primary">Barchasi</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php
                    echo GridView::widget([
                        'dataProvider' => $groups,
                        'tableOptions' => [
                            'class' => 'table',
                        ],
                        'summary' => false,
                        'columns' => [
                            [
                                'attribute' => 'name',
                                'value' => function($model) {
                                    return Html::a($model->name, Url::to(['/teacher/group/view', 'id' => $model->id]), ['class' => 'nav-link']);
                                },
                                'format' => 'html'
                            ],
                            'created_at:date',
                            [
                                'attribute' => 'pupil_count',
                                'value' => 'pupilCount',
                                'label' => 'O\'quvchilar soni'
                            ]
                        ]
                    ]);
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>