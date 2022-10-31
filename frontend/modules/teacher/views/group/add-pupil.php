<?php

use yii\helpers\Url;

?>
<style>
    .select2-selection__choice {
        background-color: blue !important;
    }
</style>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-default p-3">
            <form action="<?= Url::toRoute(['/teacher/group/add-pupil', 'id' => Yii::$app->request->get('id')]) ?>" method="post">
                <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->csrfToken ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Multiple</label>
                        <select class="select2" name="pupil" data-placeholder="Select a State" style="width: 100%">
                            <?php foreach ($model->pupilList as $k) :  ?>
                                <option value="<?= $k->id ?>"><?= $k->first_name . ' ' . $k->last_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-flat"> Qo'shish </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$this->registerJs('$(function() {$(".select2").select2();});');
?>