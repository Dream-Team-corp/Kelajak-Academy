<?php

namespace frontend\modules\teacher\controllers;

use app\models\Coursegroupdate;
use common\models\Group;
use common\models\GroupPupilList;
use common\models\search\GroupQuery;
use frontend\modules\control\controllers\BaseController;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\NotFoundHttpException;
use common\models\UseMember;


/**
 * GroupController implements the CRUD actions for Group model.
 */
class GroupController extends BaseController
{

    /**
     * Lists all Group models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new GroupQuery();
        $date = new ActiveDataProvider([
            'query' => Coursegroupdate::find(),
        ]);
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'date' => $date,
        ]);
    }

    /**
     * Displays a single Group model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = new ActiveDataProvider([
            'query' => GroupPupilList::find()->where(['group_id' => $id])
        ]);

        $pupils = new GroupPupilList();

        return $this->render('view', [
            'model' => $model,
            'pupils' => $pupils
        ]);
    }

    /**
     * Creates a new Group model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Group();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['/teacher/date/create', 'id' => $model->id, 'course_id' => $model->course_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Group model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Group model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @param $id
     * @return false|string|\yii\web\Response
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function actionAddPupil($id)
    {
        $model = new GroupPupilList();
        if (Yii::$app->request->isPost) {
            $pupil_id = Yii::$app->request->post('pupil');
            if ($model->add($id, $pupil_id)) {
                return $this->redirect(Yii::$app->request->referrer);
            } else {
                return $this->redirect(Yii::$app->request->referrer);
            }
        }
        return $this->render('add-pupil', compact('model'));
    }

    public function actionNewPupil($id)
    {
        $model = new UseMember();
        $group = new GroupPupilList();
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->type = $model::PUPIL;
            $model->status = $model::STATUS_ACTIVE;
            if ($model->createMember() && $group->add($id, $model->id)) {
                return $this->redirect(['view', 'id' => $id]);
            } else {
                $model->loadDefaultValues();
            }
        }

        return $this->render('_pupil-form', [
            'model' => $model
        ]);
    }

    /**
     * Finds the Group model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Group the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Group::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
