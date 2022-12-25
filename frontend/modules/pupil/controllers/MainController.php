<?php

namespace frontend\modules\pupil\controllers;

class MainController extends \frontend\modules\control\controllers\BaseController
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
    public function actionCourse()
    {
        return $this->render('course');
    }
    public function actionNatija()
    {
        return $this->render('natija');
    }
    public function actionTask()
    {
        return $this->render('task');
    }
    public function actionSingin()
    {
        return $this->render('singin');
    }
}