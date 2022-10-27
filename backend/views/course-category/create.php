<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CourseCategory $model */

$this->title = 'Kategoriya yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Kurs kategoriyalari', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-8 offset-2">
        <div class="card card-outline card-info p-3">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>        
    </div>
</div>

