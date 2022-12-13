<?php

$this->title = Yii::$app->name . ' - Qabulxona';

?>

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-graduate"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Faol o'quvchilar</span>
                <span class="info-box-number">
                    <?= $pupil_count ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-hospital-user"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Qabuldagi o'quvchilar</span>
                <span class="info-box-number"><?= $wait_student ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">O'qituvchilar</span>
                <span class="info-box-number"><?= $teachers ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Guruhlar</span>
                <span class="info-box-number"><?= $groups ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>