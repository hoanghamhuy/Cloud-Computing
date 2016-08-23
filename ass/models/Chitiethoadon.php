<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property integer $id_cthd
 * @property integer $soluong
 * @property integer $id_sp
 * @property integer $id_hd
 * @property integer $status
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soluong', 'id_sp', 'id_hd', 'status'], 'required'],
            [['soluong', 'id_sp', 'id_hd', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cthd' => 'Id Cthd',
            'soluong' => 'Soluong',
            'id_sp' => 'Id Sp',
            'id_hd' => 'Id Hd',
            'status' => 'Status',
        ];
    }
}
