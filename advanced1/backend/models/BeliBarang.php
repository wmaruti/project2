<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "beli_barang".
 *
 * @property int $idbelibarang
 * @property string $tanggal
 * @property int $jumlah_barang
 * @property int $bayar
 * @property int $idbarang
 * @property int $idpelanggan
 *
 * @property Barang $barang
 * @property Pelanggan $pelanggan
 * @property TransaksiBarang[] $transaksiBarangs
 */
class BeliBarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'beli_barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbelibarang', 'tanggal', 'jumlah_barang', 'bayar', 'idbarang', 'idpelanggan'], 'required'],
            [['idbelibarang', 'jumlah_barang', 'bayar', 'idbarang', 'idpelanggan'], 'integer'],
            [['tanggal'], 'safe'],
            [['idbelibarang'], 'unique'],
            [['idbarang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['idbarang' => 'idbarang']],
            [['idpelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['idpelanggan' => 'idpelanggan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbelibarang' => 'Idbelibarang',
            'tanggal' => 'Tanggal',
            'jumlah_barang' => 'Jumlah Barang',
            'bayar' => 'Bayar',
            'idbarang' => 'Idbarang',
            'idpelanggan' => 'Idpelanggan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['idbarang' => 'idbarang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['idpelanggan' => 'idpelanggan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiBarangs()
    {
        return $this->hasMany(TransaksiBarang::className(), ['idbarang' => 'idbelibarang']);
    }
}
