<?php

namespace backend\models;

use Yii;
use backend\models\Status;


/**
 * This is the model class for table "pembayaran".
 *
 * @property int $idpembayaran
 * @property string $tanggal
 * @property int $total_harga
 * @property int $bayar
 * @property string $bukti_pembayaran
 * @property int $idpemesanan
 * @property Pemesanan $pemesanan
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpembayaran', 'tanggal'], 'required'],
            [['idpembayaran', 'total_harga', 'bayar', 'idpemesanan'], 'integer'],
            [['tanggal','status_id'], 'safe'],
            [['bukti_pembayaran'], 'string', 'max' => 200],
            [['idpembayaran'], 'unique'],
            [['idpemesanan'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::className(), 'targetAttribute' => ['idpemesanan' => 'idpemesanan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpembayaran' => 'Idpembayaran',
            'tanggal' => 'Tanggal',
            'total_harga' => 'Total Harga',
            'bayar' => 'Bayar',
            'bukti_pembayaran' => 'Bukti Pembayaran',
            'idpemesanan' => 'Idpemesanan',
            'status_id' => 'Status'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanan()
    {
        return $this->hasOne(Pemesanan::className(), ['idpemesanan' => 'idpemesanan']);
    }

     public function getStatus()
    {
        return $this->hasOne(Status::className(), ['idstatus' => 'status_id']);
    }
}
