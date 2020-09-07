<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Akademik;

/**
* AkademikSearch represents the model behind the search form about `backend\models\Akademik`.
*/
class AkademikSearch extends Akademik
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'jurusan'], 'integer'],
            [['nim', 'batch'], 'number'],
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
$query = Akademik::find();

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
            'nim' => $this->nim,
            'jurusan' => $this->jurusan,
            'batch' => $this->batch,
        ]);

return $dataProvider;
}
}