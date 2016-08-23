<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'User';
?>
<div class="site-index">
    <h2>Users Manager</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if(count($lst) > 0){
                    $count = 1;
                    foreach($lst as $item){
                        ?>
                        <tr>
                            <th scope="row"><?= $count ?></th>
                            <td><?= $item->kh_ten ?></td>
                            <td><?= $item->kh_sdt ?></td>
                            <td><?= $item->kh_diachi ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['khachhang/preview', 'id'=>$item->id_kh] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit"></span>', ['khachhang/edit', 'id'=>$item->id_kh]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove"></span>',['khachhang/delete', 'id'=>$item->id_kh], ['class' => 'deleteObject']) ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                }
            ?>

            </tbody>
        </table>
        <?=Html::a('<span class="glyphicon glyphicon-plus"></span> Create new',['khachhang/create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
