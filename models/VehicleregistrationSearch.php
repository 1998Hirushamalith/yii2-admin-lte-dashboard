<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vehicleregistration;

/**
 * VehicleregistrationSearch represents the model behind the search form of `app\models\Vehicleregistration`.
 */
class VehicleregistrationSearch extends Vehicleregistration
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Vr_id', 'U_id'], 'integer'],
            [['Vr_date', 'Vr_venue'], 'safe'],
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
        $query = Vehicleregistration::find();

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
            'Vr_id' => $this->Vr_id,
            'Vr_date' => $this->Vr_date,
            'U_id' => $this->U_id,
        ]);

        $query->andFilterWhere(['like', 'Vr_venue', $this->Vr_venue]);

        return $dataProvider;
    }
}
