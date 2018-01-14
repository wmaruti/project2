<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengajuan".
 *
 * @property int $idpengajuan
 * @property string $tanggal
 * @property string $nama_barang
 * @property string $spesifikasi
 * @property int $quantity
 * @property string $keterangan
 */
class Pengajuan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengajuan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpengajuan', 'tanggal', 'nama_barang', 'spesifikasi', 'quantity', 'keterangan'], 'required'],
            [['idpengajuan', 'quantity'], 'integer'],
            [['tanggal'], 'safe'],
            [['nama_barang', 'spesifikasi', 'keterangan'], 'string', 'max' => 45],
            [['idpengajuan'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpengajuan' => 'Idpengajuan',
            'tanggal' => 'Tanggal',
            'nama_barang' => 'Nama Barang',
            'spesifikasi' => 'Spesifikasi',
            'quantity' => 'Quantity',
            'keterangan' => 'Keterangan',
        ];
    }
}
