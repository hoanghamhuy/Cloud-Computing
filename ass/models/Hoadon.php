<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $id_hd
 * @property string $ngaymua
 * @property integer $id_kh
 * @property integer $status
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ngaymua', 'id_kh', 'status'], 'required'],
            [['ngaymua'], 'safe'],
            [['id_kh', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hd' => 'Id Hd',
            'ngaymua' => 'Ngaymua',
            'id_kh' => 'Id Kh',
            'status' => 'Status',
        ];
    }
}
