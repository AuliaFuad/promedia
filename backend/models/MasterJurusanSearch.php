<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MasterJurusan;

/**
* MasterJurusanSearch represents the model behind the search form about `backend\models\MasterJurusan`.
*/
class MasterJurusanSearch extends MasterJurusan
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id'], 'integer'],
            [['nama_jurusan'], 'safe'],
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
$query = MasterJurusan::find();

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
        ]);

        $query->andFilterWhere(['like', 'nama_jurusan', $this->nama_jurusan]);

return $dataProvider;
}
}