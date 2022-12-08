<?php

namespace frontend\controllers;

use COM;
use common\models\Course;
use common\models\CourseCategory;
use common\models\search\CourseQuery;
use frontend\models\SignupForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class CourseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Yii::$app->request->get('q');
        $course = new ActiveDataProvider([
            'query' => Course::find()
                ->where(['status' => Course::STATUS_ACTIVE])
                ->orderBy(['id' => SORT_DESC])
                ->andFilterWhere(['category_id' => \Yii::$app->request->get('caty_id')])
                ->andFilterWhere(['like', 'title', $query])
                ->orFilterWhere(['like', 'description', $query]),
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

    public function actionOnlineApply($id, $t_id)
    {
        $model = new SignupForm();

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            if ($model->signup($id, $t_id)) {
                Yii::$app->session->setFlash('success', 'Saqlandi');
                return $this->goHome();
            } else {
                return $this->redirect(Yii::$app->request->referrer);
            }
        }

        return $this->render('online-apply', compact('model'));
    }

    public function actionSearch()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $query = Yii::$app->request->get('q');
        $course = new ActiveDataProvider([
            'query' => Course::find()
                ->where(['status' => Course::STATUS_ACTIVE])
                ->orFilterWhere(['like', 'title', $query])
                ->orFilterWhere(['like', 'description', $query])
        ]);
        $response = [];
        if (!empty($course->models)) {
            $response = [
                'status' => 200,
                'data' => $this->renderAjax('_ajaxData', ['model' => $course])
            ];
        } else {
            $response = [
                'status' => 404,
                'data' => 'Hech narsa topilmadi!'
            ];
        }

        return $response;
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
