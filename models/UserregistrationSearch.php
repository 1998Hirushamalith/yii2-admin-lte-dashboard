<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userregistration;

/**
 * UserregistrationSearch represents the model behind the search form of `app\models\Userregistration`.
 */
class UserregistrationSearch extends Userregistration
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['U_name', 'U_driving_license', 'U_revenue_license', 'U_insurance_card', 'U_certificate_of_registration', 'U_ommission_certificate'], 'safe'],
            [['U_contact', 'U_id'], 'integer'],
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
        $query = Userregistration::find();

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
            'U_contact' => $this->U_contact,
            'U_id' => $this->U_id,
        ]);

        $query->andFilterWhere(['like', 'U_name', $this->U_name])
            ->andFilterWhere(['like', 'U_driving_license', $this->U_driving_license])
            ->andFilterWhere(['like', 'U_revenue_license', $this->U_revenue_license])
            ->andFilterWhere(['like', 'U_insurance_card', $this->U_insurance_card])
            ->andFilterWhere(['like', 'U_certificate_of_registration', $this->U_certificate_of_registration])
            ->andFilterWhere(['like', 'U_ommission_certificate', $this->U_ommission_certificate]);

        return $dataProvider;
    }
}
