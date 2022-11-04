<?php

use common\models\PupilResult;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'O\'quvchilar natijalari';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-primary p-1">


    <p>
        <?= Html::a('Yangi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <div class="table-responsive">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'pupil_id',
                'teacher_id',
                'group_id',
                'numbers_of_question',
                'correct_answer',
                'incorrect_answer',
                'created_at',
                [
                    'class' => ActionColumn::class,
                    'urlCreator' => function ($action, PupilResult $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>


</div>
