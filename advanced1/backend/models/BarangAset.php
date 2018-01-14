<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barang_aset".
 *
 * @property integer $kode_aset
 * @property string $nama_barang
 * @property integer $stock
 * @property integer $harga
 *
 * @property PemakaianAset[] $pemakaianAsets
 */
class BarangAset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang_aset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_barang', 'stock', 'harga'], 'required'],
            [['stock', 'harga'], 'integer'],
            [['nama_barang'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_aset' => 'Kode Aset',
            'nama_barang' => 'Nama Barang',
            'stock' => 'Stock',
            'harga' => 'Harga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemakaianAsets()
    {
        return $this->hasMany(PemakaianAset::className(), ['aset_kode' => 'kode_aset']);
    }
}
