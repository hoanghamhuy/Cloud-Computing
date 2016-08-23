<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Thông tin hóa đơn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">


    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'line-form']);
                if(count($listLine) > 0){
                    $count = 1;
                    foreach($listLine as $value){
                        $item = $value['station'];
                        $line = $value['line'];
                        ?>
                        <tr>
                            <th scope="row"><?= $count ?></th>
                            <td><?= $line->kh_ten ?></td>
                            <td><?= $item->ngaymua ?></td>
                            <td><?= $item->status ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['station/preview', 'id'=>$item->id_hd] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit"></span>', ['station/edit', 'id'=>$item->id_hd]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove"></span>',['station/delete', 'id'=>$item->id_hd], ['class' => 'deleteObject']) ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                }
            ActiveForm::end(); ?>

        </div>
    </div>

</div>
