<?php

namespace frontend\modules\manager\controllers;

use common\models\Group;
use frontend\modules\control\controllers\BaseController;
use common\models\ManagerForm;
use common\models\Member;
use Yii;
/**
 * Default controller for the `manager` module
 */
class DefaultController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $pupil_count = Member::find()->where(['type'=>Member::PUPIL, 'status' => Member::STATUS_ACTIVE])->count();
        $wait_student = Member::find()->where(['type'=>Member::PUPIL, 'status' => Member::STATUS_INACTIVE])->count();
        $teachers = Member::find()->where(['type'=>Member::TEACHER, 'status' => Member::STATUS_ACTIVE])->count();
        $groups = Group::find()->where(['status' => Group::ACTIVE])->count();
        return $this->render('index', compact('pupil_count', 'wait_student', 'teachers', 'groups'));
    }
    
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'main-login';

        $model = new ManagerForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
