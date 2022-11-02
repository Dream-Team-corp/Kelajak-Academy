<?php

namespace frontend\models;

use common\models\Bil;
use common\models\Member;
use Yii;

class UseBil extends Bil{

    public function getAllPupil(){
        return Member::findAll(['status' => Member::STATUS_ACTIVE]);
    }

}