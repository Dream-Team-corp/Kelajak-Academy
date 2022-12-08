<?php

namespace frontend\modules\teacher\controllers;

use frontend\modules\control\controllers\BaseController;

class HelpController extends BaseController
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}
