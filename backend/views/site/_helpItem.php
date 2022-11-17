
        <?php
          use kartik\widgets\SwitchInput;
          use yii\bootstrap4\ActiveForm;
          use yii\bootstrap4\Html;
        ?>
                        
                        <div class="p-3 rounded bg-white card card-outline card-info">
                            <div class="text">
                                <div>
                                    <?php

                                  $star='';
                                  for ($i=0; $i < $model->rating; $i+=2) { 
                                    $star.='<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                  }

                                    echo '<div class="text-right py-2">'.
                                     Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', ['delete','id' => $model->id,],[  'data-method'=> 'post', 'class'=> 'btn btn-danger'])
                                    .'</div>';
                                    echo '</div>
                                    <p class="h5 border rounded p-2">
                                        '.$model->body.'
                                    </p>
                                    '.$star.'<br>';

                                    echo Html::a('Batafsil',['update', 'id'=>$model->id],['class'=>'btn btn-primary my-3']);
                                    // $f = ActiveForm::begin();

                                    //     echo $f->field($model, 'status')->widget(SwitchInput::class,[
                                    //         'id'=>'coment'.$model->id
                                    //     ])->label('Nofaol');
                                        
                                    //     echo Html::a('Saqlash', ['update', 'id'=> $model->id], ['data-method'=> 'post', 'class'=>'btn btn-success']);
                                        
                                    // ActiveForm::end(); 

                                    ?>
                            </div>
                        </div>
                    <!-- <div class="d-flex align-items-center">
                        <div class="">
                            <p class="h4">Ismi: '.$model->username.'</p>
                            <span class="h5">Sarlavhasi: '.$model->title.'</span>
                        </div>
                    </div> -->