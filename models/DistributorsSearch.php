<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Distributors;

/**
 * DistributorsSearch represents the model behind the search form of `app\models\Distributors`.
 */
class DistributorsSearch extends Distributors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['D_id', 'Fs_id'], 'integer'],
            [['D_name', 'Location', 'Time', 'Scan_status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Distributors::find();

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
            'D_id' => $this->D_id,
            'Time' => $this->Time,
            'Fs_id' => $this->Fs_id,
        ]);

        $query->andFilterWhere(['like', 'D_name', $this->D_name])
            ->andFilterWhere(['like', 'Location', $this->Location])
            ->andFilterWhere(['like', 'Scan_status', $this->Scan_status]);

        return $dataProvider;
    }
}
