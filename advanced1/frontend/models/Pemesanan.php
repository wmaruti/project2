<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $idpemesanan
 * @property string $tanggal
 * @property int $lama_sewa
 * @property int $total
 * @property int $idstatus
 * @property int $idjadwal
 * @property int $idpelanggan
 *
 * @property Pembayaran[] $pembayarans
 * @property Jadwal $jadwal
 * @property Pelanggan $pelanggan
 * @property Status $status
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpemesanan', 'tanggal', 'lama_sewa', 'total', 'idstatus', 'idjadwal', 'idpelanggan'], 'required'],
            [['idpemesanan', 'lama_sewa', 'total', 'idstatus', 'idjadwal', 'idpelanggan','created_at'], 'integer'],
            [['tanggal'], 'safe'],
            [['idpemesanan'], 'unique'],
            [['idjadwal'], 'exist', 'skipOnError' => true, 'targetClass' => Jadwal::className(), 'targetAttribute' => ['idjadwal' => 'idjadwal']],
            [['idpelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['idpelanggan' => 'idpelanggan']],
            [['idstatus'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['idstatus' => 'idstatus']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpemesanan' => 'Kde Pemesanan',
            'tanggal' => 'Tanggal',
            'lama_sewa' => 'Lama Sewa',
            'total' => 'Total',
            'idstatus' => 'Idstatus',
            'idjadwal' => 'Idjadwal',
            'idpelanggan' => 'Pelanggan',
            'created_at' => 'Dibuat Pada'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::className(), ['idpemesanan' => 'idpemesanan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwal()
    {
        return $this->hasOne(Jadwal::className(), ['idjadwal' => 'idjadwal']);
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
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['idstatus' => 'idstatus']);
    }
}
