<?php

namespace frontend\modules\pupil\controllers;

class MainController extends \frontend\modules\control\controllers\BaseController
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}