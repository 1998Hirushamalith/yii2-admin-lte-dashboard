<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Token;

/**
 * TokenSearch represents the model behind the search form of `app\models\Token`.
 */
class TokenSearch extends Token
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['T_id', 'Fuel_Quota_type', 'Fs_id', 'Vr_id', 'P_id'], 'integer'],
            [['Fuel_Quota_usage', 'Fuel_Quota_weekly_balance', 'Date', 'Time', 'Validity_period'], 'safe'],
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
        $query = Token::find();

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
            'T_id' => $this->T_id,
            'Fuel_Quota_type' => $this->Fuel_Quota_type,
            'Date' => $this->Date,
            'Time' => $this->Time,
            'Fs_id' => $this->Fs_id,
            'Vr_id' => $this->Vr_id,
            'P_id' => $this->P_id,
        ]);

        $query->andFilterWhere(['like', 'Fuel_Quota_usage', $this->Fuel_Quota_usage])
            ->andFilterWhere(['like', 'Fuel_Quota_weekly_balance', $this->Fuel_Quota_weekly_balance])
            ->andFilterWhere(['like', 'Validity_period', $this->Validity_period]);

        return $dataProvider;
    }
}
