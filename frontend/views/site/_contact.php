<?php

use kartik\widgets\StarRating;
?>



                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div>
                                    <div class="">
                                        <?php for ($i=0; $i < $model->rating; $i+=2) { 
                                            echo '<i class="fa fa-star text-warning " aria-hidden="true"></i>';
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                                <p class="mb-4 px-3" style="height: 200px; overflow-y: scroll; text-align:justify;">
                                    <?=$model->body?>
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="name"><?=$model->username?></p>
                                        <span class="position"><?=$model->title?></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>