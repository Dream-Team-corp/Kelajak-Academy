<?php

namespace backend\controllers;

use backend\models\UserForm;
use common\models\Contact;
use common\models\Course;
use common\models\CourseCategory;
use common\models\Member;
use common\models\MetaTag;
use common\models\TeacherAbout;
use common\models\User;
use frontend\models\Faq;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\Response;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'users', 'setting', 'help', 'delete', 'update', 'user','faq', 'javob', 'category'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $contact =  Contact::find()->where(['status'=>0])->all();
        $faq = Faq::find()->where(['javob' => null])->all();
        $kurs = Course::find()->all();
        $teacher = Member::find()->where(['type'=>10])->all();
        $pupil = Member::find()->where(['type'=>5])->all();
        $kategory = CourseCategory::find()->where(['status'=>1])->all();
        return $this->render('index',[
            'faq'=> $faq,
            'contact'=> $contact,
            'kurs'=> $kurs,
            'teacher'=> $teacher,
            'pupil'=> $pupil,
            'kategory'=> $kategory,
        ]);
    }
    public function actionJavob($id)
    {
        $model = Faq::findOne($id);
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->video = $model->getYoutube();
            if($model->save()){
                $model =new ActiveDataProvider([
                    'query'=> Faq::find()->orderBy(['id'=> SORT_DESC]),
                    'pagination' => [
                        'pageSize' => 8
                    ]
                ]);
                return $this->render('faq',compact('model'));    
            }
            
        }
        return $this->render('javob', compact('model'));
    }
    public function actionFaq()
    {
        $model =new ActiveDataProvider([
            'query'=> Faq::find()->orderBy(['id'=> SORT_DESC]),
            'pagination' => [
                'pageSize' => 8
            ]
        ]);
        
        return $this->render('faq', compact('model'));
    }
    public function actionSetting()
    {

        $model = (empty(MetaTag::find()->orderBy(['id' => SORT_DESC])->one())) ?  $model = new MetaTag() : MetaTag::find()->orderBy(['id' => SORT_DESC])->one();
        

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()) &&  $model->save()){

            return $this->redirect(Yii::$app->request->referrer);
        }

        return $this->render('setting', compact('model'));
    }
    public function actionUsers()
    {
        $teacher = new ActiveDataProvider([
            'query' => Member::find()->where(['status' => Member::STATUS_ACTIVE, 'type' => Member::TEACHER]),
            'pagination' => [
                'pageSize' => 4
            ]
        ]);
        $parents = new ActiveDataProvider([
            'query' => Member::find()->where(['status' => Member::STATUS_ACTIVE, 'type' => Member::PARENT]),
        ]);
        $child = new ActiveDataProvider([
            'query' => Member::find()->where(['status' => Member::STATUS_ACTIVE, 'type' => Member::PUPIL]),
            'pagination' => [
                'pageSize' => 4
            ]
        ]);
        return $this->render('users', compact('teacher', 'parents', 'child'));
    }
    public function actionHelp()
    {
        $inactive = new ActiveDataProvider([
            'query' => Contact::find()->where(['status' => 0]),
            'pagination' => [
                'pageSize' => 4
            ]
        ]);
        $active = new ActiveDataProvider([
            'query' => Contact::find()->where(['status' => 1]),
            'pagination' => [
                'pageSize' => 4
            ]
        ]);
        return $this->render('help', ['help' => $inactive, 'active' => $active]);
    }
    public function actionUpdate($id)
    {
        $model = Contact::findOne($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            if ($model->save()) {
                return $this->redirect(['help']);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionDelete($id)
    {
        Contact::findOne($id)->delete();

        return $this->redirect(['help']);
    }
    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'main-login';

        $model = new UserForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionUser($id)
    {
        $user = Member::findOne($id);
        $teacherabout = TeacherAbout::findOne(['teacher_id' => $id]);
        return $this->render('user', compact('user', 'teacherabout'));
    }
    public function actionCategory()
    {
        $model =new ActiveDataProvider([
            'query' => Course::find()->orderBy(['id'=>SORT_DESC]),
        ]);
        return $this->render('category', compact('model'));
    }
}
