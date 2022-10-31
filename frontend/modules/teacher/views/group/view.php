<?php

use hail812\adminlte3\yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Group $model */

$this->title = 'O\'quvchilar ro\'yhati';
$this->params['breadcrumbs'][] = ['label' => 'Guruhlarim', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?= $this->render('add-pupil', ['model' => $pupils]) ?>
<div class="card card-success p-3">

    <?=
    GridView::widget([
        'dataProvider' => $model,
        'summary' => '',
        'tableOptions' => [
            'class' => 'table table-bordered',
            'id' => 'all-pupil'
        ],
        'columns' => [
            [
                'attribute' => 'fish',
                'label' => 'F.I.SH',
                'value' => function ($model) {
                    return $model->pupil->last_name . ' ' . $model->pupil->first_name;
                }
            ],
            'created_at:datetime',
            [
                'class' => ActionColumn::class
            ]

        ]
    ])
    ?>

</div>