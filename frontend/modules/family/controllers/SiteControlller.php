<?php

namespace frontend\modules\family\controllers;

use frontend\modules\control\controllers\BaseController;

class SiteController extends BaseController
{

   /**
    * It renders the view file `index.php` in the `views/site` folder.
    * 
    * @return The view file index.php
    */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
