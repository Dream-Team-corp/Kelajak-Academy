
 <a href="<?= \yii\helpers\Url::to(['course/index', 'caty_id' => $model->id]) ?>" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>)">
     <div class="text w-100 text-center">
         <h3> <?= $model->title ?></h3>
     </div>
 </a>