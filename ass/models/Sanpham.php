<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $id_sp
 * @property string $sp_ten
 * @property integer $sp_gia
 * @property string $sp_mota
 * @property integer $id_lsp
 * @property string $sp_anh
 * @property integer $status
 */
class Sanpham extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sp_gia', 'id_lsp', 'status'], 'integer'],
            [['sp_mota'], 'string'],
            [['sp_ten', 'sp_anh'], 'string', 'max' => 150],
            ['file', 'file']
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sp' => 'Id Sp',
            'sp_ten' => 'Sp Ten',
            'sp_gia' => 'Sp Gia',
            'sp_mota' => 'Sp Mota',
            'id_lsp' => 'Id Lsp',
            'sp_anh' => 'Sp Anh',
            'status' => 'Status',
        ];
    }
}
