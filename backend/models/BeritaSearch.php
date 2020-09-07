<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Berita;

/**
* BeritaSearch represents the model behind the search form about `backend\models\Berita`.
*/
class BeritaSearch extends Berita
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'id_kategori', 'id_user'], 'integer'],
            [['judul', 'isi_berita', 'tanggal', 'foto'], 'safe'],
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
$query = Berita::find();

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
            'id_kategori' => $this->id_kategori,
            'tanggal' => $this->tanggal,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi_berita', $this->isi_berita])
            ->andFilterWhere(['like', 'foto', $this->foto]);

return $dataProvider;
}
}