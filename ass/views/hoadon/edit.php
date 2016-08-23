<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
?>
<div class="site-index">
    <h2>User management</h2>
    <div class="table-responsive">
        <?php $form = ActiveForm::begin(['id' => 'edit-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
            <?= $form->field($edit, 'id_kh')->hiddenInput()->label(false) ?>
            <?= $form->field($edit, 'kh_ten') ?>
            <?= $form->field($edit, 'kh_sdt') ?>
            <?= $form->field($edit, 'kh_diachi') ?>
            <div class="form-group">
                <?= Html::submitButton('Lưu lại', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
