<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $idpelanggan
 * @property string $nama
 * @property string $club
 * @property string $alamat
 * @property string $no_telpon
 * @property int $user_id
 *
 * @property BeliBarang[] $beliBarangs
 * @property User $user
 * @property Pemesanan[] $pemesanans
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpelanggan', 'nama', 'club', 'alamat', 'no_telpon', 'user_id'], 'required'],
            [['idpelanggan', 'user_id'], 'integer'],
            [['nama', 'club'], 'string', 'max' => 30],
            [['alamat'], 'string', 'max' => 45],
            [['no_telpon'], 'string', 'max' => 12],
            [['idpelanggan'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpelanggan' => 'Idpelanggan',
            'nama' => 'Nama',
            'club' => 'Club',
            'alamat' => 'Alamat',
            'no_telpon' => 'No Telpon',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBeliBarangs()
    {
        return $this->hasMany(BeliBarang::className(), ['idpelanggan' => 'idpelanggan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['idpelanggan' => 'idpelanggan']);
    }
}
