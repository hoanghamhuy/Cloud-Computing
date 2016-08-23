<?php

namespace app\controllers;

use app\models\CreateUser;
use app\models\Hoadon;
use app\models\Khachhang;
use app\models\Chitiethoadon;
use app\models\Roles;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class HoadonController extends Controller
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
        $lst = Hoadon::find()
            ->where(['status' => 1])
            ->all();
        $result = [];
        if(count($lst) > 0){
            foreach ($lst as $item) {
                $line = Khachhang::findOne($item->id_kh);
                array_push($result, ['station'=>$item, 'line'=>$line]);
            }
        }
        return $this->render('index', ['listLine' => $result]);
    }

    public function actionEdit($id = null)
    {

        //$lstLine = Lines::find()->where([RECORD_STATUS => STATUS_NORMAL])->all();
        $model = Khachhang::findOne($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['khachhang/index']);
        } else {
            return $this->render('edit', [
                'edit' => $model,
            ]);
        }
    }

    public function actionCreate() {
        $model = new Khachhang();
        if($model->load(Yii::$app->request->post())) {
            if($model->validate()) {
                $model->status = 1;
                if($model->save()){
                    return $this->redirect(['khachhang/index']);    
                }
                return $this->render('create',['user' => $model, 'msg'=>'have some error!!!']); 
            }
            
        } else {
            return $this->render('create',['user' => $model]);
        }
    }

    public function actionDelete($id) {
        $user = Khachhang::findOne($id);
        if(!empty($user)) {
            $user->status = 0;
            if($user->save()) {
                return $this->redirect('?r=khachhang/index');
            }
        }
    }

    public function actionPreview($id) {
        $model = Chitiethoadon::findOne($id);
        return $this->render('preview', [
                'model' => $model,
        ]);
    }

}
