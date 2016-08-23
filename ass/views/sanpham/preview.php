<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Thông tin Loại sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">


    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'line-form']); ?>
                <?= $form->field($model, 'id_sp')->hiddenInput(['name'=>'id_kh'])->label(false) ?>
                <?= $form->field($model, 'sp_ten')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'sp_mota')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'sp_gia')->textInput(['disabled'=>true]) ?>
                <?= Html::img($model->sp_anh, ['class'=>'thumbnails2']) ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
