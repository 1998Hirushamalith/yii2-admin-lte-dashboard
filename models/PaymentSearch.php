<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payment;

/**
 * PaymentSearch represents the model behind the search form of `app\models\Payment`.
 */
class PaymentSearch extends Payment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['P_id', 'P_type', 'U_id', 'Fs_id'], 'integer'],
            [['P_date', 'P_time', 'Total_payment'], 'safe'],
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
        $query = Payment::find();

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
            'P_id' => $this->P_id,
            'P_type' => $this->P_type,
            'P_date' => $this->P_date,
            'P_time' => $this->P_time,
            'U_id' => $this->U_id,
            'Fs_id' => $this->Fs_id,
        ]);

        $query->andFilterWhere(['like', 'Total_payment', $this->Total_payment]);

        return $dataProvider;
    }
}
