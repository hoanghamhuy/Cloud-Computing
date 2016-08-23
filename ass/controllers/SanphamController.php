<?php

namespace app\controllers;

use app\models\CreateUser;
use app\models\Sanpham;
use app\models\Loaisanpham;
use app\models\Roles;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class SanphamController extends Controller
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
        $lst = Sanpham::find()
            ->where(['status' => 1])
            ->all();
        $result = [];
        if(count($lst) > 0){
            foreach ($lst as $item) {
                $line = Loaisanpham::findOne($item->id_lsp);
                array_push($result, ['station'=>$item, 'line'=>$line]);
            }
        }
        return $this->render('index', ['listLine' => $result]);
    }

    public function actionEdit($id)
    {
        $model = Sanpham::findOne($id);
        $listLine = Loaisanpham::find()->where(['between', 'status', 1, 4])->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file){
                $id = $model->id_sp;
                $imageName = "sp_".$id.'_'.getdate()[0];
                $model->file->saveAs('uploads/'.$imageName.'.'.$model->file->extension);

                $station = Sanpham::findOne($id);
                $station->sp_anh = '@web/uploads/'.$imageName.'.'.$model->file->extension;
                $station->save();
            }
            return $this->redirect('?r=sanpham/index');
        } else {
            return $this->render('edit', [
                'model' => $model,
                'line' => $listLine,
            ]);
        }
    }

    public function actionCreate() {
        $lstLine = Loaisanpham::find()->where(['between', 'status', 1, 4])
            ->all();
        $model = new Sanpham();
        if($model->load(Yii::$app->request->post())) {
            if($model->validate()){
                $model->status = 1;
                $model->save();
                $model->file = UploadedFile::getInstance($model, 'file');
                if($model->file){
                    $id = $model->id_sp;
                    $imageName = "loaisanpham_".$id.'_'.getdate()[0];
                    $model->file->saveAs('uploads/'.$imageName.'.'.$model->file->extension);

                    $station = Sanpham::findOne($id);
                    $station->sp_anh = '@web/uploads/'.$imageName.'.'.$model->file->extension;
                    $station->save();
                }
                return $this->redirect(['sanpham/index']);
            }
        } else {
            return $this->render('create',['user' => $model, 'listLine' => $lstLine,]);
        }
    }

    public function actionDelete($id) {
        $user = Sanpham::findOne($id);
        if(!empty($user)) {
            $user->status = 0;
            if($user->save()) {
                return $this->redirect('?r=sanpham/index');
            }
        }
    }

    public function actionPreview($id) {
        $model = Sanpham::findOne($id);
        return $this->render('preview', [
                'model' => $model,
        ]);
    }

}
