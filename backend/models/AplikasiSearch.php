<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Aplikasi;

/**
* AplikasiSearch represents the model behind the search form about `backend\models\Aplikasi`.
*/
class AplikasiSearch extends Aplikasi
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id'], 'integer'],
            [['nama_app', 'link_fb', 'link_twitter', 'link_linkedin', 'link_instagram'], 'safe'],
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
$query = Aplikasi::find();

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

        $query->andFilterWhere(['like', 'nama_app', $this->nama_app])
            ->andFilterWhere(['like', 'link_fb', $this->link_fb])
            ->andFilterWhere(['like', 'link_twitter', $this->link_twitter])
            ->andFilterWhere(['like', 'link_linkedin', $this->link_linkedin])
            ->andFilterWhere(['like', 'link_instagram', $this->link_instagram]);

return $dataProvider;
}
}