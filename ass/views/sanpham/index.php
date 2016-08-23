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
                <th>Hình Ảnh</th>
                <th>Sản Phẩm</th>
                <th>Loại Sản Phẩm</th>
                <th>Giá</th>
                <th>Mô Tả</th>
                <th>Hành Động</th>
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
                            <td><?= Html::img($item->sp_anh, ['class'=>'thumbnails']) ?></td>
                            <td><?= $item->sp_ten ?></td>
                            <td><?= $line->lsp_ten ?></td>
                            <td><?= $item->sp_gia ?></td>
                            <td><?= $item->sp_mota ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['station/preview', 'id'=>$item->id_sp] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit"></span>', ['station/edit', 'id'=>$item->id_sp]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove"></span>',['station/delete', 'id'=>$item->id_sp], ['class' => 'deleteObject']) ?>
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
