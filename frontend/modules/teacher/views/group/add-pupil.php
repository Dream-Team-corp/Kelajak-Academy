<?php

use common\models\GroupPupilList;
use yii\helpers\Url;
$id = Yii::$app->request->get('id');
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-default p-3">
            <form action="<?= Url::toRoute(['/teacher/group/add-pupil', 'id' => $id]) ?>" method="post">
                <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->csrfToken ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Barcha o'quvchilar</label>
                        <select class="form-control select2 select2-primary" name="pupil" data-dropdown-css-class="select2-primary" style="width: 100%">
                            <option>O'quvchini tanlang:</option>
                            <?php foreach ($model->pupilList as $k) :  ?>
                                <option value="<?= $k->id ?>">
                                    <?= $k->first_name . ' ' . $k->last_name ?>
                                    <?= (!empty(GroupPupilList::findOne(['pupil_id' => $k->id, 'group_id' => $id]))) ? "allaqachon qo'shilgan" : '' ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary btn-flat"> Guruhga qo'shish </button>
                        <a href="<?= Url::to(['new-pupil', 'id' => $id]) ?>"> Ro'yhatga qo'shish </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>