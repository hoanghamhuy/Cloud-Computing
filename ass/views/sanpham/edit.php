<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
$listData=ArrayHelper::map($line,'id_lsp','lsp_ten');
?>
<div class="site-index">
    <h2>Sửa sản phẩm</h2>
    <div class="table-responsive">
        <?php $form = ActiveForm::begin(['id' => 'edit-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
            <?= $form->field($model, 'sp_ten') ?>
            <?= $form->field($model, 'sp_gia') ?>
            <?= $form->field($model, 'sp_mota') ?>
            <?= $form->field($model, 'id_lsp')->dropDownList($listData) ?>
            <?= $form->field($model, 'file')->fileInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Lưu lại', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
