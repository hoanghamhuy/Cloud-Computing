<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
?>
<div class="site-index">
    <h2>Create User</h2>
    <div class="table-responsive">
                    
        <?php if(isset($msg)){
            ?>
            <label><?=$msg?></label>
            <?php
        }
        ?>
        
        <?php $form = ActiveForm::begin(['id' => 'user-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
            <?= $form->field($user, 'kh_ten') ?>
            <?= $form->field($user, 'kh_sdt') ?>
            <?= $form->field($user, 'kh_diachi') ?>
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>
