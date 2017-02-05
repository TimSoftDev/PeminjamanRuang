<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pesanan;

class PesananSearch extends Pesanan
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nim_mahasiswa', 'sesi_waktu', 'id_ruang', 'tanggal_penggunaan', 'no_surat', 'status', 'tanggal_pesan', 'tanggal_verifikasi'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Pesanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
                 return $dataProvider;
        }

        $query->joinWith('idRuang')
            ->joinWith('sesiWaktu');

        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal_penggunaan' => $this->tanggal_penggunaan,
            'tanggal_pesan' => $this->tanggal_pesan,
            'tanggal_verifikasi' => $this->tanggal_verifikasi,
        ]);

        $query->andFilterWhere(['like', 'nim_mahasiswa', $this->nim_mahasiswa])
            ->andFilterWhere(['like', 'ruang.nama', $this->id_ruang])            
            ->andFilterWhere(['like', 'waktu.jam', $this->sesi_waktu])
            ->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
