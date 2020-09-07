<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PerusahaanSatu;

/**
 * PerusahaanSatuSearch represents the model behind the search form about `backend\models\PerusahaanSatu`.
 */
class PerusahaanSatuSearch extends PerusahaanSatu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_usaha', 'id_bisnis', 'tahun_berdiri', 'id_user'], 'integer'],
            [['logo_perusahaan', 'alamat_perusahaan', 'email_kantor','nama_perusahaan', 'deskripsi_singkat', 'deskripsi_panjang', 'portofolio_perusahaan', 'foto_dokumentasi', 'upload_company_profile'], 'safe'],
            [['no_telp_kantor'], 'number'],
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
        $query = PerusahaanSatu::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'nama_perusahaan' => $this->nama_perusahaan,
            'id_usaha' => $this->id_usaha,
            'id_bisnis' => $this->id_bisnis,
            'tahun_berdiri' => $this->tahun_berdiri,
            'no_telp_kantor' => $this->no_telp_kantor,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'logo_perusahaan', $this->logo_perusahaan])
            ->andFilterWhere(['like', 'alamat_perusahaan', $this->alamat_perusahaan])
            ->andFilterWhere(['like', 'email_kantor', $this->email_kantor])
            ->andFilterWhere(['like', 'deskripsi_singkat', $this->deskripsi_singkat])
            ->andFilterWhere(['like', 'deskripsi_panjang', $this->deskripsi_panjang])
            ->andFilterWhere(['like', 'portofolio_perusahaan', $this->portofolio_perusahaan])
            ->andFilterWhere(['like', 'foto_dokumentasi', $this->foto_dokumentasi])
            ->andFilterWhere(['like', 'upload_company_profile', $this->upload_company_profile]);

        return $dataProvider;
    }
}