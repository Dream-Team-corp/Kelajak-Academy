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
            'class' => 'table table-bordered',
        ],
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'username',
            [
                'attribute' => 'password_hash',
                'value' => $model->username,

            ],

            'tel_number',
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