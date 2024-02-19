<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * OrderSearch represents the model behind the search form of `app\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Or_id', 'Or_type', 'Or_quantity', 'Quality_check', 'Fs_id'], 'integer'],
            [['Or_price', 'Or_date'], 'safe'],
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
        $query = Order::find();

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
            'Or_id' => $this->Or_id,
            'Or_type' => $this->Or_type,
            'Or_quantity' => $this->Or_quantity,
            'Or_date' => $this->Or_date,
            'Quality_check' => $this->Quality_check,
            'Fs_id' => $this->Fs_id,
        ]);

        $query->andFilterWhere(['like', 'Or_price', $this->Or_price]);

        return $dataProvider;
    }
}
