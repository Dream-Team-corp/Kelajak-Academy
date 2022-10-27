<?php

use common\models\Group;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\search\GroupQuery $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Guruhlarim';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-primary p-3">

    <p>
        <?= Html::a('Guruh yaratish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-bordered'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'course_id',
            'status',
            'created_at:date',
            //'updated_at',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Group $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>