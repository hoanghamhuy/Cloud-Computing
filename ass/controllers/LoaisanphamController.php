<?php

namespace app\controllers;

use app\models\CreateUser;
use app\models\Loaisanpham;
use app\models\Roles;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class LoaisanphamController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $lst = Loaisanpham::find()->where(['between', 'status', 1, 4])
            ->all();
        //var_dump($lst);die;
        return $this->render('index', ['lst' => $lst]);
    }

    public function actionEdit($id = null)
    {

        //$lstLine = Lines::find()->where([RECORD_STATUS => STATUS_NORMAL])->all();
        $model = Loaisanpham::findOne($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['loaisanpham/index']);
        } else {
            return $this->render('edit', [
                'edit' => $model,
            ]);
        }
    }

    public function actionCreate() {
        $model = new Loaisanpham();
        if($model->load(Yii::$app->request->post())) {
            if($model->validate()) {
                $model->status = 1;
                if($model->save()){
                    return $this->redirect(['loaisanpham/index']);    
                }
                return $this->render('create',['user' => $model, 'msg'=>'have some error!!!']); 
            }
            
        } else {
            return $this->render('create',['user' => $model]);
        }
    }

    public function actionDelete($id) {
        $user = Loaisanpham::findOne($id);
        if(!empty($user)) {
            $user->status = 0;
            if($user->save()) {
                return $this->redirect('?r=loaisanpham/index');
            }
        }
    }

    public function actionPreview($id) {
        $model = Loaisanpham::findOne($id);
        return $this->render('preview', [
                'model' => $model,
        ]);
    }

}
