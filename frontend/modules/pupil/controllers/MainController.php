<?php

namespace frontend\modules\pupil\controllers;

use common\models\Course;
use common\models\Group;
use common\models\GroupPupilList;
use common\models\Member;
use common\models\search\CourseCategory;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\UploadedFile;

class MainController extends \frontend\modules\control\controllers\BaseController
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
    public function actionCourse()
    {
        $id = GroupPupilList::find()->where(['pupil_id' => Yii::$app->user->identity->id])->all();
        $id = $id[0]->group_id;
        $model = new ActiveDataProvider([
            'query' => Group::find()->where(['id' => $id])
        ]);
        
        return $this->render('course',compact('model'));
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
        $model = Member::findOne(Yii::$app->user->identity->id);
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->photo = UploadedFile::getInstance($model, 'photo');
            if ($model->photo->saveAs(Yii::getAlias('@saveImage').'/' . time().'.'.$model->photo->extension, true)) {
                $model->photo = time().'.'.$model->photo->extension;
                if($model->save()){
                    return $this->render('index');
                }
            }
        }
        return $this->render('singin', compact('model'));
    }
}