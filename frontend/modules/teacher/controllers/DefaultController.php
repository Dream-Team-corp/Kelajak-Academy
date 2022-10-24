<?php

namespace frontend\modules\teacher\controllers;

use frontend\modules\control\controllers\BaseController;

/**
 * Default controller for the `teacher` module
 */
class DefaultController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
