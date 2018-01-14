<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "divisi".
 *
 * @property integer $iddivisi
 * @property string $nama_divisi
 * @property integer $gaji
 *
 * @property Pegawai[] $pegawais
 */
class Divisi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'divisi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_divisi', 'gaji'], 'required'],
            [['gaji'], 'integer'],
            [['nama_divisi'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddivisi' => 'Iddivisi',
            'nama_divisi' => 'Nama Divisi',
            'gaji' => 'Gaji',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::className(), ['divisi_iddivisi' => 'iddivisi']);
    }
}
