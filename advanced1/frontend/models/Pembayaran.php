<?php

namespace frontend\models;

use Yii;

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
            [['idpembayaran', 'tanggal', 'total_harga', 'bayar'], 'required'],
            [['idpembayaran', 'total_harga', 'bayar', 'idpemesanan'], 'integer'],
            [['tanggal'], 'safe'],
           [['bukti_pembayaran'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg,  jpeg, png'],
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
            'idpembayaran' => 'Kode Pembayaran',
            'tanggal' => 'Tanggal',
            'total_harga' => 'Total Harga',
            'bayar' => 'Bayar',
            'bukti_pembayaran' => Yii::t('app','Bukti Pembayaran'),
             #'gambar' =>Yii::t('app','Bukti Pembayaran'),
            'idpemesanan' => 'Kode Pemesanan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanan()
    {
        return $this->hasOne(Pemesanan::className(), ['idpemesanan' => 'idpemesanan']);
    }


      public function getImageurl()
  {
  return \Yii::$app->request->BaseUrl.'@backend/web/uploads/BuktiPembayaran' . $idpembayaran->bukti_pembayaran;
  }
}
