<?php

use common\models\CourseCategory;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\search\CourseCategory $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-success p-3">

    <p>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i>', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary'=>'',
        'columns' => [
            'id',
            [
                'attribute'=> 'image',
                'label'=>'Rasmlar',
                'value'=> 'Image',
                'format'=> 'html',
            ],
            'title',
            'tag',
            [
                'attribute'=> 'status',
                'label'=> 'Faoliyati',
                'value'=> 'Status',
                'format'=> 'html',

            ],
            //'created_at',
            //'updated_at',
                
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, CourseCategory $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'buttons'=>[
                    'view'=>function ($url) {
                        return Html::a('<i class="fa fa-eye" aria-hidden="true"></i>', $url, ['class' => 'view btn btn-primary py-0']);
                    },
                    'update'=>function ($url) {
                        return Html::a('<i class="fa fa-pen text-white" aria-hidden="true"></i>', $url, ['class' => ' update btn btn-warning mx-2 py-0']);
                    },
                    'delete'=>function ($url) {
                        return Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', $url, ['class' => 'delete btn btn-danger py-0', 'data-method' => 'post']);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
