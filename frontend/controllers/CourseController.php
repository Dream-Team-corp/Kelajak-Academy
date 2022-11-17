<?php

namespace frontend\controllers;

use common\models\Course;
use common\models\CourseCategory;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class CourseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $course = new ActiveDataProvider([
            'query' => Course::find()
                ->where(['status' => Course::STATUS_ACTIVE])
                ->orderBy(['id' => SORT_DESC])
                ->andFilterWhere(['category_id' => \Yii::$app->request->get('caty_id')]),
            'pagination' => [
                'pageSize' => 10
            ]
        ]);
        return $this->render('index', compact('course'));
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        $categories = CourseCategory::find()->where(['status' => 1])->limit(5)->all();
        $otherCourse = Course::find()->where(['status' => Course::STATUS_ACTIVE])->all();
        return $this->render('view', compact('model', 'categories', 'otherCourse'));
    }

    private function findModel($id)
    {
        if ($id != null) {
            return Course::findOne($id);
        } else {
            throw new NotFoundHttpException('Bunday kurs topilmadi!', 404);
        }
    }
}
