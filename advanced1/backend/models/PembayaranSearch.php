<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pembayaran;
use frontend\models\Status;

/**
 * PembayaranSearch represents the model behind the search form of `backend\models\Pembayaran`.
 */
class PembayaranSearch extends Pembayaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpembayaran', 'total_harga', 'bayar', 'idpemesanan'], 'integer'],
            [['tanggal', 'bukti_pembayaran','status_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pembayaran::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idpembayaran' => $this->idpembayaran,
            'tanggal' => $this->tanggal,
            'total_harga' => $this->total_harga,
            'bayar' => $this->bayar,
            'idpemesanan' => $this->idpemesanan,
            'status_id' => $this->status_id,
            
        ]);

        $query->andFilterWhere(['like', 'bukti_pembayaran', $this->bukti_pembayaran]);

        return $dataProvider;
    }
}
