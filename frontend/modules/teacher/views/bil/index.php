<?php

use common\models\Bil;
use frontend\component\widgets\SplitDate;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\VarDumper;

/** @var yii\web\View $this */
/** @var common\models\search\BilQuery $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'To\'lovlar tarixi';
$this->params['breadcrumbs'][] = $this->title;

$november = [];

foreach ($dataProvider->models as $k) {
    if ($k->splitDate == 11) {
        $november[] = $k->id;
    }
}
$data = [];
for ($i = 0; $i < count($november); $i++) {
    $data[] = Bil::findOne(['id' => $november[$i]]);
}

// VarDumper::dump($data, 10, true);

?>
<div class="card card-outline card-primary p-2">

    <p>
        <?= Html::a('Yangi to\'lov', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="table-responsive">


        <?php  echo GridView::widget([
            'dataProvider' => $dataProvider,
            'summary' => false,
            'tableOptions' => [
                'class' => 'table',
                'id' => 'all-pupil'
            ],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                // 'id',
                [
                    'attribute' => 'pupil_id',
                    'label' => 'F.I.SH',
                    'value' => function ($model) {
                        return $model->pupil->first_name . ' ' . $model->pupil->last_name;
                    }
                ],
                [
                    'attribute' => 'group_id',
                    'value' => 'group.name'
                ],
                // 'teacher_id',
                [
                    'attribute' => 'how_much',
                    'value' => function ($model) {
                        return number_format($model->how_much, '0', ' ', ' ') . ' So\'m';
                    }
                ],
                [
                    'attribute' => 'type',
                    'value' => 'typeLabel',
                    'format' => 'html'
                ],
                [
                    'attribute' => 'created_at',
                    'format' => 'html',
                    'value' => 'splitDate'
                ],
                [
                    'class' => ActionColumn::class,
                    'urlCreator' => function ($action, Bil $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    },
                    'template' => '{update} {delete}',
                ],

            ],
        ]); ?>
    </div>


</div>