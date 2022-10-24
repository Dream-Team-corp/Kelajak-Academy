<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'O\'qituvchi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view card card-outline card-primary p-2 px-4">


    <p>
        <?= Html::a('<i class="fa fa-pen" aria-hidden="true"></i>', ['update', 'id' => $model->id], ['class' => 'mt-3 btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete', 'id' => $model->id], [
            'class' => 'mt-3 btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'username',
            [
                'attribute'=> 'password_hash',
                'value'=> $model->username,

            ],

            'tel_number',
            [
                'attribute'=>'status',
                'value'=> $model->statusLabel,
                'format'=>'html'
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
