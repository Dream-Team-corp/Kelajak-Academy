<?php
use yii\helpers\Url;

$i = 0;
if ($model->javob != null) {

?>
           
                <div class="card card-primary card-outline px-3">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                        <div class="card-header">
                            <h4 class="card-title w-100 h4">
                                <?=++$i.' : '. $model->savol?>?
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body row">
                            <div class="col-8 text-left border h5">
                                <?=$model->javob?>
                            </div>
                            
                            <div class="embed-responsive embed-responsive-16by9 col-4">
                                <iframe class="embed-responsive-item" src="<?=$model->video?>" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
 <?php

}
 
 ?>
            
        