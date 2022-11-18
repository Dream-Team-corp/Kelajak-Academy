<?php

namespace frontend\component\widgets;

use InvalidArgumentException;
use yii\base\Widget;

class SplitDate extends Widget{

    public $model;

    public function run()
    {
        parent::init();

        if($this->model !== null){
            return $this->render('_table', compact('model'));
        } else{
            throw new InvalidArgumentException("Model massiv bo'lishi kerak");
        }
    }

}