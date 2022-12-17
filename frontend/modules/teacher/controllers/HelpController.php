<?php

namespace frontend\modules\teacher\controllers;

use frontend\models\Faq;
use frontend\modules\control\controllers\BaseController;
use Yii;
use yii\web\UploadedFile;

class HelpController extends BaseController
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionForm()
    {
        $model = new Faq();
        if($this->request->isPost && $model->load($this->request->post())){
            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image->saveAs(Yii::getAlias('@saveImage') . '/' . time().'.'.$model->image->extension, true)){
                $model->image = time().'.'.$model->image->extension;
                if($model->save()){
                    return $this->render('index');
                }
            } 
        }
        return $this->render('form', compact('model'));
    }
}
