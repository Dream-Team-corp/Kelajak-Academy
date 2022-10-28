<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Group $model */

$this->title = 'O\'quvchilar ro\'yhati';
$this->params['breadcrumbs'][] = ['label' => 'Guruhlarim', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card card-success p-3">

<?=
    GridView::widget([
        'dataProvider' => $model,
        'columns' => [
            [
                'attribute' => 'fish',
                'label' => 'F.I.SH',
                'value' => 'pupil.first_name'
            ]
            
        ]
    ])
?>

</div>
