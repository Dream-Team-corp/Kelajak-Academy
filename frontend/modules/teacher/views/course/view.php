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

    <p>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-bordered'
        ],
        'attributes' => [
            'id',
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
                    return number_format($model->price, '0', ' ', ' ')." so'm";
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