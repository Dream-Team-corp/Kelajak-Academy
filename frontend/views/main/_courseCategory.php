 <?php


    ?>


 <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>)">
     <div class="text w-100 text-center">
         <h3>IT &amp; <?= $model->title ?></h3>
         <span><?= $model->tag ?></span>
     </div>
 </a>