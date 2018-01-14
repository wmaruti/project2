<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pemakaian_aset".
 *
 * @property int $kode
 * @property string $tanggal
 * @property int $qty_pemakaian
 * @property string $keterangan
 * @property int $kode_aset
 *
 * @property BarangAset $kodeAset
 */
class PemakaianAset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pemakaian_aset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'tanggal', 'qty_pemakaian', 'keterangan', 'kode_aset'], 'required'],
            [['kode', 'qty_pemakaian', 'kode_aset'], 'integer'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string', 'max' => 45],
            [['kode'], 'unique'],
            [['kode_aset'], 'exist', 'skipOnError' => true, 'targetClass' => BarangAset::className(), 'targetAttribute' => ['kode_aset' => 'kode_aset']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'tanggal' => 'Tanggal',
            'qty_pemakaian' => 'Qty Pemakaian',
            'keterangan' => 'Keterangan',
            'kode_aset' => 'Kode Aset',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeAset()
    {
        return $this->hasOne(BarangAset::className(), ['kode_aset' => 'kode_aset']);
    }
}
