
<div class="p-3 rounded bg-white card card-outline card-info">
                            <div class="text">
                                <div>
                                    <?php

use kartik\widgets\SwitchInput;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

                                    $f = ActiveForm::begin();
                                    echo $f->field($model, 'status')->widget(SwitchInput::class)->label('Faol');
                                   echo '</div>
                                   <p class="mb-4 border rounded p-2">
                                       '.$model->body.'
                                   </p>
                                   <div class="d-flex align-items-center">
                                       <div class="">
                                           <p class="h4">Ismi: '.$model->username.'</p>
                                           <span class="h5">Sarlavhasi: '.$model->title.'</span>
                                       </div>
                                   </div>'; 

                                
                                echo Html::submitButton('Saqlash',['class'=>'btn btn-success mt-3']);
                                    ActiveForm::end(); ?>
                            </div>
                        </div>