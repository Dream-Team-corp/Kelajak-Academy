<?php

use kartik\widgets\StarRating;
?>



                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div>

                                </div>
                                <p class="mb-4 px-3" style="height: 120px; overflow-y: scroll; text-align:justify;">
                                    <?=$model->body?>
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="pl-3">
                                        <p class="name"><?=$model->username?></p>
                                        <span class="position"><?=$model->title?></span>
                                    </div>
                                    <div class="pl-2">
                                        <?php for ($i=0; $i < $model->rating; $i+=2) { 
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                        } 
                                        
                                        ?>    
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        