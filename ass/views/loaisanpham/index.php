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
                <th>Loại Sản Phẩm</th>
                <th>Hành động</th>
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
                            <td><?= $item->lsp_ten ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['loaisanpham/preview', 'id'=>$item->id_lsp] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit"></span>', ['loaisanpham/edit', 'id'=>$item->id_lsp]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove"></span>',['loaisanpham/delete', 'id'=>$item->id_lsp], ['class' => 'deleteObject']) ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                }
            ?>

            </tbody>
        </table>
        <?=Html::a('<span class="glyphicon glyphicon-plus"></span> Create new',['loaisanpham/create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
