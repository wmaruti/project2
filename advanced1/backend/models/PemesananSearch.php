<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `backend\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpemesanan', 'lama_sewa', 'total', 'idstatus', 'idjadwal', 'idpelanggan'], 'integer'],
            [['tanggal'], 'safe'],
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
        $query = Pemesanan::find();

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
            'idpemesanan' => $this->idpemesanan,
            'tanggal' => $this->tanggal,
            'lama_sewa' => $this->lama_sewa,
            'total' => $this->total,
            'idstatus' => $this->idstatus,
            'idjadwal' => $this->idjadwal,
            'idpelanggan' => $this->idpelanggan,
        ]);

        return $dataProvider;
    }
}
