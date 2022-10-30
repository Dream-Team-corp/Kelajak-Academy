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
<div class="card card-success p-3">
<p>
    <?= Html::a('O\'quvchi qo\'shish', Url::to(['/teacher/group/add-pupil', 'id' => Yii::$app->request->get('id')]), ['class' => 'btn btn-primary']) ?>
</p>
<?=
    GridView::widget([
        'dataProvider' => $model,
        'columns' => [
            [
                'attribute' => 'fish',
                'label' => 'F.I.SH',
                'value' => 'pupil.first_name'
            ],
            'created_at:datetime',
            [
                'class' => ActionColumn::class
            ]
            
        ]
    ])
?>

</div>
