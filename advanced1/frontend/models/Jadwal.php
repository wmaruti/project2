<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $idjadwal
 * @property string $jam
 * @property string $jam_Sewa
 * @property int $harga
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
            [['idjadwal', 'jam', 'jam_Sewa', 'harga'], 'required'],
            [['idjadwal', 'harga'], 'integer'],
            [['jam'], 'string', 'max' => 10],
            [['jam_Sewa'], 'string', 'max' => 15],
            [['idjadwal'], 'unique'],
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
