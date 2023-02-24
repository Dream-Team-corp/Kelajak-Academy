<?php

namespace frontend\modules\teacher\controllers;

use common\models\Group;
use common\models\task;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TaskController implements the CRUD actions for task model.
 */
class TaskController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all task models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => task::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single task model.
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
    public function actionTaskview($id)
    {
        return $this->render('taskview', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionTask($id)
    {
        $group = Group::find()->where(['course_id'=>$id])->all();
        return $this->render('task', [
            'model' => $group,
            'course_id'=> $id
        ]);
    }
    /**
     * Creates a new task model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new task();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->teacher_id = Yii::$app->user->identity->id;
                $model->group_id = $_GET['id'];
                $model->course_id = $_GET['course_id'];
                $model->image = UploadedFile::getInstance($model, 'image');
                if(($model->image != null) && $model->image->saveAs(Yii::getAlias('@saveImage').'/'.time().'.'.$model->image->extension,true)){
                $model->image = time().'.'.$model->image->extension;
                    if($model->save()){
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
                else if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing task model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->image = UploadedFile::getInstance($model,'image');
            if(($model->image != null) && $model->image->saveAs(Yii::getAlias('@saveImage').'/'.time().'.'.$model->image->extension,true)){
                $model->image = time().'.'.$model->image->extension;
                    if($model->save()){
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing task model.
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
     * Finds the task model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return task the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = task::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
