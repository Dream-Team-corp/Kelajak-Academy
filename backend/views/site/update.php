<?php

use kartik\widgets\SwitchInput;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
$this->title = 'Kontakt';
$this->params['breadcrumbs'][] = ['label' => 'Yordam', 'url' => ['help']];
$this->params['breadcrumbs'][] = $this->title;
$star='';
for ($i=0; $i < $model->rating; $i+=2) { 
  $star.='<i class="fa fa-star text-warning" aria-hidden="true"></i>';
}
?>
<div class="row">
    <div class="col-8 offset-2">
        <div class="card card-outline card-primary p-3">

            <div class="card-header d-flex justify-content-between">
                <div class="w-50 h5">
                    <?=$model->title?>
                </div>
                <div class="w-50 text-right">
                    <?=$star?>
                </div>
            </div>
            <div class="card-body h5">
                <?=$model->body?>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="w-50 h4">
                    <?=$model->username?>
                </div>
                <div class="w-50 text-right">
                    <?php 
                        $f = ActiveForm::begin();

                            echo $f->field($model, 'status')->widget(SwitchInput::class,[
                                'id'=>'coment'.$model->id
                            ])->label('Faollashtirish:');
                            
                            echo Html::a('Saqlash', ['update', 'id'=> $model->id], ['data-method'=> 'post', 'class'=>'btn btn-success']);
                            
                        ActiveForm::end(); 
                    ?>    
                </div>
                
            </div>
        </div>
    </div>
</div>