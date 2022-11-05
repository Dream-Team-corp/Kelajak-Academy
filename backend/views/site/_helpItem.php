
        <?php
          use kartik\widgets\SwitchInput;
          use yii\bootstrap4\ActiveForm;
          use yii\bootstrap4\Html;
        ?>
                        
                        <div class="p-3 rounded bg-white card card-outline card-info">
                            <div class="text">
                                <div>
                                    <?php

                                  

                                    echo '<div class="text-right py-2">'.
                                     Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete','id' => $model->id,],[  'data-method'=> 'post', 'class'=> 'btn btn-danger'])
                                    .'</div>';
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
                                    $f = ActiveForm::begin();

                                        echo $f->field($model, 'status')->widget(SwitchInput::class)->label('Faol');
                                        
                                        echo Html::a('Saqlash', ['update', 'id'=> $model->id], ['data-method'=> 'post', 'class'=>'btn btn-success']);
                                        
                                    ActiveForm::end(); 

                                    ?>
                            </div>
                        </div>