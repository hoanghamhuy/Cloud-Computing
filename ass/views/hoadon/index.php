<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'User';
?>
<div class="site-index">
    <h2>Loại sản phẩm</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Khách hàng</th>
                <th>Ngày mua</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php
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
            ?>

            </tbody>
        </table>
        <?=Html::a('<span class="glyphicon glyphicon-plus"></span> Create new',['sanpham/create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
