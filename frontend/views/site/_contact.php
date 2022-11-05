<?php

use kartik\widgets\StarRating;
?>



                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div>

                                </div>
                                <p class="mb-4">
                                    <?=$model->body?>
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="pl-3">
                                        <p class="name"><?=$model->username?></p>
                                        <span class="position"><?=$model->title?></span>
                                    </div>
                                    <div class="pl-2">
                                        <?=
                                        StarRating::widget([
                                            'name' => 'rating_1',
                                            'value' => 2,
                                            'pluginOptions' => [
                                                'readonly' => true,
                                                'showClear' => false,
                                                'showCaption' => false,
                                            ],
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>