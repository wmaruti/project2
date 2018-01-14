<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $idstatus
 * @property string $status
 *
 * @property Pemesanan[] $pemesanans
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idstatus', 'status'], 'required'],
            [['idstatus'], 'integer'],
            [['status'], 'string', 'max' => 45],
            [['idstatus'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idstatus' => 'Idstatus',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::className(), ['idstatus' => 'idstatus']);
    }
}
