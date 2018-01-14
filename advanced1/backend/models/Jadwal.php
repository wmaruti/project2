<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property integer $idjadwal
 * @property string $jam
 * @property string $jam_Sewa
 * @property integer $harga
 *
 * @property Pemesanan[] $pemesanans
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jam', 'jam_Sewa', 'harga'], 'required'],
            [['harga'], 'integer'],
            [['jam'], 'string', 'max' => 10],
            [['jam_Sewa'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idjadwal' => 'Idjadwal',
            'jam' => 'Jam',
            'jam_Sewa' => 'Jam  Sewa',
            'harga' => 'Harga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['idjadwal' => 'idjadwal']);
    }
}
