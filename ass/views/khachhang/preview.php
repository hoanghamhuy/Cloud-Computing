<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Thông tin khách hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">


    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'line-form']); ?>
                <?= $form->field($model, 'id_kh')->hiddenInput(['name'=>'id_kh'])->label(false) ?>
                <?= $form->field($model, 'kh_ten')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'kh_sdt')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'kh_diachi')->textInput(['disabled'=>true]) ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
