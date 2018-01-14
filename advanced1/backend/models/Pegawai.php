<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property integer $idpegawai
 * @property string $nama_pegawai
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $no_telp
 * @property integer $divisi_iddivisi
 *
 * @property Divisi $divisiIddivisi
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'tempat_lahir', 'tgl_lahir', 'alamat', 'no_telp', 'divisi_iddivisi'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['divisi_iddivisi'], 'integer'],
            [['nama_pegawai'], 'string', 'max' => 45],
            [['tempat_lahir', 'alamat'], 'string', 'max' => 30],
            [['no_telp'], 'string', 'max' => 12],
            [['divisi_iddivisi'], 'exist', 'skipOnError' => true, 'targetClass' => Divisi::className(), 'targetAttribute' => ['divisi_iddivisi' => 'iddivisi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpegawai' => 'Idpegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'divisi_iddivisi' => 'Divisi Iddivisi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDivisiIddivisi()
    {
        return $this->hasOne(Divisi::className(), ['iddivisi' => 'divisi_iddivisi']);
    }
}
