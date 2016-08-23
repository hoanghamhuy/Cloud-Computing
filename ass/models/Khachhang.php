<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $id_kh
 * @property string $kh_ten
 * @property string $kh_sdt
 * @property string $kh_diachi
 * @property integer $status
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['kh_ten'], 'string', 'max' => 50],
            [['kh_sdt'], 'string', 'max' => 12],
            [['kh_diachi'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kh' => 'Id Kh',
            'kh_ten' => 'Kh Ten',
            'kh_sdt' => 'Kh Sdt',
            'kh_diachi' => 'Kh Diachi',
            'status' => 'Status',
        ];
    }
}
