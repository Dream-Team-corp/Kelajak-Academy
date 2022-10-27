<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\CourseCategory $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Course Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-outline card-danger p-3">

    <p>
        <?= Html::a('<i class="fa fa-pen" aria-hidden="true"></i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=> 'image',
                'label'=>'<h3 class="bold">Rasmingiz</h3>',
                'value'=> $model->Image,
                'format'=> 'html',
            ],
            [
                'attribute'=> 'id',
            ],
            [
                'attribute'=> 'title',
                'label'=> 'Sarlavha'
            ],
            [
                'attribute'=> 'tag',
                'label'=> 'Qidiruv'
            ],
            [
                'attribute'=> 'status',
                'label'=> 'Faoliyati',
                'value'=> $model->Status,
                'format'=> 'html',

            ],
        ],
    ]) ?>

</div>
