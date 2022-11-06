<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Course $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Kurslar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-outline card-info p-3">

    <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-bordered'
        ],
        'attributes' => [
            'id',
            [
                'attribute' => 'user_id',
                'value' => function ($model){
                    return $model->user->first_name.' '.$model->user->last_name;
                }
            ],
            'title',
            'description:ntext',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($model) {
                    return "<img src='" . Yii::getAlias('@defaultImage') . "/" . $model->image . "' class='w-50'>";
                }
            ],
            [
                'attribute' => 'price',
                'value' => function ($model) {
                    return number_format($model->price, '0', ' ', ' ') . " so'm";
                }
            ],
            [
                'attribute' => 'category_id',
                'value' => $model->category->title
            ],
            [
                'attribute' => 'status',
                'value' => $model->statusLabel,
                'format' => 'html',

            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>