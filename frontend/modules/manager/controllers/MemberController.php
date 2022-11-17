<?php

namespace frontend\modules\manager\controllers;

use common\models\Course;
use common\models\OnlineApply;
use common\models\UseMember;
use frontend\modules\control\controllers\BaseController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use Yii;

/**
 * MemberController implements the CRUD actions for UseMember model.
 */
class MemberController extends BaseController
{

    /**
     * Lists all UseMember models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => UseMember::find()->where(['status' => UseMember::STATUS_ACTIVE, 'type' => UseMember::PUPIL]),
            'pagination' => [
                'pageSize' => 30
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
        ]);
        $title = 'O\'qiyotgan O\'quvchilar';
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'title' => $title
        ]);
    }

    public function actionCreate()
    {
        $model = new UseMember();

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->type = $model::PUPIL;
            $model->status = $model::STATUS_INACTIVE;
            if ($model->signUp()) {
                return $this->redirect(['info', 'id' => $model->id]);
            } else {
                $model->loadDefaultValues();
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionInfo($id) {
        $model = OnlineApply::findOne(['user_id' => $id]);

        if (Yii::$app->request->isPost && $model->load($this->request->post())){
            $teacher = Course::findOne(['id' => $model->course_id]);
            $model->teacher_id = $teacher->user_id;
            return $model->save() ? $this->redirect(['view', 'id' => $id]) : throw new NotFoundHttpException('Sahifa topilmadi!');
        }

        $model->course_id = '';
        $model->location = '';
        return $this->render('info', compact('model'));
    }

    /**
     * Displays a single UseMember model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionInActive()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => UseMember::find()->where(['status' => UseMember::STATUS_INACTIVE, 'type' => UseMember::PUPIL]),
            'pagination' => [
                'pageSize' => 30
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
        ]);

        $title = "Qabuldagi o'quvchilar";

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'title' => $title
        ]);
    }

    /**
     * Finds the UseMember model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return UseMember the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UseMember::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
