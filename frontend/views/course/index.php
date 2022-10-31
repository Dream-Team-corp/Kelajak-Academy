<?php

use yii\bootstrap4\LinkPager as Bootstrap4LinkPager;
use yii\widgets\ListView;

$this->title = "Kurslarimiz";

$this->params['breadcrumbs'][] = $this->title;

?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-box bg-white ftco-animate">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>

                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <h3 class="heading-sidebar">Kurs toifasi</h3>
                    <form action="#" class="browse-form">
                        <label for="option-category-1"><input type="checkbox" id="option-category-1" name="vehicle" value="" checked> Design &amp; Illustration</label><br>
                        <label for="option-category-2"><input type="checkbox" id="option-category-2" name="vehicle" value=""> Web Development</label><br>
                        <label for="option-category-3"><input type="checkbox" id="option-category-3" name="vehicle" value=""> Programming</label><br>
                        <label for="option-category-4"><input type="checkbox" id="option-category-4" name="vehicle" value=""> Music &amp; Entertainment</label><br>
                        <label for="option-category-5"><input type="checkbox" id="option-category-5" name="vehicle" value=""> Photography</label><br>
                        <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Health &amp; Fitness</label><br>
                    </form>
                </div>

                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <h3 class="heading-sidebar">Kurs o'qituvchisi</h3>
                    <form action="#" class="browse-form">
                        <label for="option-instructor-1"><input type="checkbox" id="option-instructor-1" name="vehicle" value="" checked> Ronald Jackson</label><br>
                        <label for="option-instructor-2"><input type="checkbox" id="option-instructor-2" name="vehicle" value=""> John Dee</label><br>
                        <label for="option-instructor-3"><input type="checkbox" id="option-instructor-3" name="vehicle" value=""> Nathan Messy</label><br>
                        <label for="option-instructor-4"><input type="checkbox" id="option-instructor-4" name="vehicle" value=""> Tony Griffin</label><br>
                        <label for="option-instructor-5"><input type="checkbox" id="option-instructor-5" name="vehicle" value=""> Ben Howard</label><br>
                        <label for="option-instructor-6"><input type="checkbox" id="option-instructor-6" name="vehicle" value=""> Harry Potter</label><br>
                    </form>
                </div>

                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <h3 class="heading-sidebar">Kurs turi</h3>
                    <form action="#" class="browse-form">
                        <label for="option-course-type-1"><input type="checkbox" id="option-course-type-1" name="vehicle" value="" checked> Basic</label><br>
                        <label for="option-course-type-2"><input type="checkbox" id="option-course-type-2" name="vehicle" value=""> Intermediate</label><br>
                        <label for="option-course-type-3"><input type="checkbox" id="option-course-type-3" name="vehicle" value=""> Advanced</label><br>
                    </form>
                </div>

                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <h3 class="heading-sidebar">Dasturlash</h3>
                    <form action="#" class="browse-form">
                        <label for="option-software-1"><input type="checkbox" id="option-software-1" name="vehicle" value="" checked> Adobe Photoshop</label><br>
                        <label for="option-software-2"><input type="checkbox" id="option-software-2" name="vehicle" value=""> Adobe Illustrator</label><br>
                        <label for="option-software-3"><input type="checkbox" id="option-software-3" name="vehicle" value=""> Sketch</label><br>
                        <label for="option-software-4"><input type="checkbox" id="option-software-4" name="vehicle" value=""> WordPress</label><br>
                        <label for="option-software-5"><input type="checkbox" id="option-software-5" name="vehicle" value=""> HTML &amp; CSS</label><br>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <?= ListView::widget([
                    'dataProvider' => $course,
                    'itemView' => '_courseItem',
                    'layout' => "{items}",
                    'options' => [
                        'class' => 'row'
                    ],
                    'itemOptions' => [
                        'class' => 'col-md-6 col-lg-5 d-flex align-items-stretch ftco-animate'
                    ],
                    'pager' => [
                        'class' => Bootstrap4LinkPager::class,
                    ]
                ]);
                ?>
            </div>
        </div>
</section>