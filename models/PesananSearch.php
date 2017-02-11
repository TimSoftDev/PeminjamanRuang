<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pesanan;

/**
 * PesananSearch represents the model behind the search form about `app\models\Pesanan`.
 */
class PesananSearch extends Pesanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nim', 'id_ruang', 'tanggal_mulai', 'tanggal_selesai', 'no_surat', 'tanggal_input', 'tanggal_verifikasi'], 'safe'],
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
        $query = Pesanan::find();

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
            'id' => $this->id,
            'tanggal_mulai' => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
            'tanggal_input' => $this->tanggal_input,
            'tanggal_verifikasi' => $this->tanggal_verifikasi,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'no_surat', $this->no_surat]);

        return $dataProvider;
    }
}
