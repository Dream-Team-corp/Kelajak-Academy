<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Javob yozish';
$img = ($model->image == null) ? '' : $model->image;
?>
<div class="row bg-white p-3 border">
    <div class="col-6 rounded">
        <img class="img-fluid" src="<?=Yii::getAlias('@defaultImage').'/'.$img?>" >
        <div class="h4 p-3 border border-info"> 1 : 
            <?=$model->savol?>
        </div>
    </div>
    <div class="col-6">
        <?php
        $f = ActiveForm::begin();
            echo $f->field($model, 'javob')->textarea(['rows'=> 9])->label('Javobni yozing :');
            echo $f->field($model, 'video')->textInput()->label('YouTube yo\'lini tashlang :');
            echo Html::submitButton('Saqlash', ['class'=> 'btn btn-info']);
        ActiveForm::end();
        ?>
    </div>
</div>