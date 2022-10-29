<?php

namespace frontend\controllers;

use common\models\Course;
use common\models\TeacherAbout;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class TeachersController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $teachers = new ActiveDataProvider([
            'query' => TeacherAbout::find()->orderBy(['id' => SORT_DESC])
        ]);

        return $this->render('index', compact('teachers'));
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        $course = new ActiveDataProvider([
            'query' => Course::find()->where(['user_id'])->orderBy(['id'=> SORT_DESC])
        ]);

        return $this->render('view', [
            'model' => $model,
            'course' => $course
        ]);

    }

    private function findModel($id)
    {
        if ($id != null) {
            return TeacherAbout::findOne($id);
        } else {
            throw new NotFoundHttpException("Bunday o'qituvchi mavjud emas!", 404);
        }
    }
}
