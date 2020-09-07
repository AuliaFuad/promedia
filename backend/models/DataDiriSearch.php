<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataDiri;

/**
* DataDiriSearch represents the model behind the search form about `backend\models\DataDiri`.
*/
class DataDiriSearch extends DataDiri
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'id_pengguna'], 'integer'],
            [['nama_lengkap', 'nama_panggilan', 'foto', 'tempat_lahir', 'alamat_tinggal', 'email', 'akun_fb', 'akun_ig', 'akun_li'], 'safe'],
            [['no_hp'], 'number'],
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
$query = DataDiri::find();

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
            'id_pengguna' => $this->id_pengguna,
            'no_hp' => $this->no_hp,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'nama_panggilan', $this->nama_panggilan])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat_tinggal', $this->alamat_tinggal])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'akun_fb', $this->akun_fb])
            ->andFilterWhere(['like', 'akun_ig', $this->akun_ig])
            ->andFilterWhere(['like', 'akun_li', $this->akun_li]);

return $dataProvider;
}
}