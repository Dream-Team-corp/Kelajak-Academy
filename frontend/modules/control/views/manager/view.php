<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Admin $model */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Qabulxona xodimlari', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-outline card-success p-3">
    <p>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'options' => [
            'class' => 'table table-bordered'
        ],
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            [
                'attribute' => 'password_hash',
                'value' => $model->username
            ],
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => $model->statusLabel,

            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
