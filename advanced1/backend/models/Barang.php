<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $idbarang
 * @property string $nama_barang
 * @property int $stock
 * @property int $harga_beli
 * @property int $harga_jual
 *
 * @property BeliBarang[] $beliBarangs
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbarang', 'nama_barang', 'stock', 'harga_beli', 'harga_jual'], 'required'],
            [['idbarang', 'stock', 'harga_beli', 'harga_jual'], 'integer'],
            [['nama_barang'], 'string', 'max' => 45],
            [['idbarang'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbarang' => 'Idbarang',
            'nama_barang' => 'Nama Barang',
            'stock' => 'Stock',
            'harga_beli' => 'Harga Beli',
            'harga_jual' => 'Harga Jual',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBeliBarangs()
    {
        return $this->hasMany(BeliBarang::className(), ['idbarang' => 'idbarang']);
    }
}
