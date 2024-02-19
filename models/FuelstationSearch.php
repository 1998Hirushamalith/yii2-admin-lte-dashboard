<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fuelstation;

/**
 * FuelstationSearch represents the model behind the search form of `app\models\Fuelstation`.
 */
class FuelstationSearch extends Fuelstation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fs_id', 'Province_id', 'District_id', 'City_id', 'Contact_no', 'D_id'], 'integer'],
            [['Fs_name', 'Address', 'Email', 'Weekly_fuel_quota', 'Population_density', 'Remarks'], 'safe'],
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
        $query = Fuelstation::find();

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
            'Fs_id' => $this->Fs_id,
            'Province_id' => $this->Province_id,
            'District_id' => $this->District_id,
            'City_id' => $this->City_id,
            'Contact_no' => $this->Contact_no,
            'D_id' => $this->D_id,
        ]);

        $query->andFilterWhere(['like', 'Fs_name', $this->Fs_name])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Weekly_fuel_quota', $this->Weekly_fuel_quota])
            ->andFilterWhere(['like', 'Population_density', $this->Population_density])
            ->andFilterWhere(['like', 'Remarks', $this->Remarks]);

        return $dataProvider;
    }
}
