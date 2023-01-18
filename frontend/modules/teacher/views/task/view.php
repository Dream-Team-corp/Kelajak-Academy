<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\task $model */

$this->title = 'Topshiriq-'. $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topshiriqlar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-view card card-outline card-primary p-3">

    <p>
        <?= Html::a(Yii::t('app', 'O\'zgartirish'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'O\'chirish'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'text',
            'image',
            'video',
            'teacher_id',
            'group_id',
            'course_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
