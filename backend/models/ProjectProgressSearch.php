<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProjectProgress;

/**
* ProjectProgressSearch represents the model behind the search form about `backend\models\ProjectProgress`.
*/
class ProjectProgressSearch extends ProjectProgress
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'id_project'], 'integer'],
            [['gambar'], 'safe'],
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
$query = ProjectProgress::find();

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
            'id_project' => $this->id_project,
        ]);

        $query->andFilterWhere(['like', 'gambar', $this->gambar]);

return $dataProvider;
}
}