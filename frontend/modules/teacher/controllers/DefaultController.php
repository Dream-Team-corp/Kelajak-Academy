<?php

namespace frontend\modules\teacher\controllers;

use common\models\Bil;
use common\models\Group;
use common\models\TeacherAbout;
use frontend\modules\control\controllers\BaseController;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;

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
        $about = TeacherAbout::findOne(['teacher_id' => Yii::$app->user->id]);
        if (empty($about)) {
            return $this->redirect(['profile-setting']);
        }
        
        $bill = new ActiveDataProvider([
            'query' => Bil::find()->limit(5)->orderBy(['id' => SORT_DESC])
        ]);

        $groups = new ActiveDataProvider([
            'query' => Group::find()->where(['teacher_id' => Yii::$app->user->id])->orderBy(['id' => SORT_DESC])
        ]);

        return $this->render('index', compact('about', 'bill', 'groups'));
    }

    public function actionProfileSetting()
    {

        $model = (empty(TeacherAbout::findOne(['teacher_id' => Yii::$app->user->id]))) ? new TeacherAbout() : TeacherAbout::findOne(['teacher_id' => Yii::$app->user->id]);
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {

            $model->image = $model->saveImage();
            if ($model->save()) {
                return $this->redirect(['index']);
            } else {
                $model->loadDefaultValues();
            }
        }

        return $this->render('profile', [
            'model' => $model,
        ]);
    }
}
