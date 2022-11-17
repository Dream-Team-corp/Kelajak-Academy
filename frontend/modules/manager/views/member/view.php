<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\UseMember $model */

$this->title = $model->first_name . ' ' . $model->last_name;
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-outline card-info p-3">

    <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-bordered',
        ],
        'attributes' => [
            'id',
            'first_name',
            'last_name',

            'tel_number',
            [
                'attribute' => 'location',
                'value' => $model->otherInfo->location,
                'label' => "Yashash xududi"
            ],
            [
                'attribute' => 'course',
                'label' => "Tanlagan kursi",
                'format' => 'html',
                'value' => function ($model) {
                    return "<a target='_blank' href='" . Yii::$app->params['courseLink'] . $model->otherInfo->course->id . "'>" . $model->otherInfo->course->title . "</a>";
                }
            ],
            [
                'attribute' => 'status',
                'value' => $model->statusLabel,
                'format' => 'html'
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>