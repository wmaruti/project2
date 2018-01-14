<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengeluaran".
 *
 * @property integer $idpengeluaran
 * @property string $tanggal
 * @property string $keterangan
 * @property integer $jumlah_pengeluaran
 */
class Pengeluaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengeluaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal', 'keterangan', 'jumlah_pengeluaran'], 'required'],
            [['tanggal'], 'safe'],
            [['jumlah_pengeluaran'], 'integer'],
            [['keterangan'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpengeluaran' => 'Idpengeluaran',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'jumlah_pengeluaran' => 'Jumlah Pengeluaran',
        ];
    }
}
