<?php

namespace frontend\modules\teacher\controllers;

use frontend\models\Faq;
use frontend\modules\control\controllers\BaseController;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\UploadedFile;

use function PHPUnit\Framework\assertNotNull;

class HelpController extends BaseController
{

    public function actionIndex()
    {
        $model = new ActiveDataProvider([
            'query' => Faq::find(),
        ]);
        return $this->render('index',compact('model'));
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
