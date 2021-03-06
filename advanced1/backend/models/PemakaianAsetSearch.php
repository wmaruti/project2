<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PemakaianAset;

/**
 * PemakaianAsetSearch represents the model behind the search form of `backend\models\PemakaianAset`.
 */
class PemakaianAsetSearch extends PemakaianAset
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'qty_pemakaian', 'kode_aset'], 'integer'],
            [['tanggal', 'keterangan'], 'safe'],
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
        $query = PemakaianAset::find();

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
            'kode' => $this->kode,
            'tanggal' => $this->tanggal,
            'qty_pemakaian' => $this->qty_pemakaian,
            'kode_aset' => $this->kode_aset,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
