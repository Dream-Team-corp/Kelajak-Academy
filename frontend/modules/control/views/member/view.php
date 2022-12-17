<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\UseMember $model */

$this->title = $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'O\'quvchilar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-primary p-2">
    <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-bordered'
        ],
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'username',
//            'auth_key',
            [
                'attribute' => 'password',
                'value' => $model->username,
                'format' => 'html',
                'label' => 'Parol'
            ],
            'tel_number',
            [
                'attribute' => 'status',
                'value' => $model->statusLabel,
                'format' => 'html'
            ],
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
