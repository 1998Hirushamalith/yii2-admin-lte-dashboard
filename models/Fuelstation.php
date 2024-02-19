<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fuelstation".
 *
 * @property int $Fs_id
 * @property string $Fs_name
 * @property int $Province_id
 * @property int $District_id
 * @property int $City_id
 * @property string $Address
 * @property string $Email
 * @property int $Contact_no
 * @property string $Weekly_fuel_quota
 * @property string $Population_density
 * @property string $Remarks
 * @property int $D_id
 *
 * @property Distributors $d
 * @property Distributors[] $distributors
 * @property Order[] $orders
 * @property Payment[] $payments
 * @property Token[] $tokens
 */
class Fuelstation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fuelstation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fs_name', 'Province_id', 'District_id', 'City_id', 'Address', 'Email', 'Contact_no', 'Weekly_fuel_quota', 'Population_density', 'Remarks', 'D_id'], 'required'],
            [['Province_id', 'District_id', 'City_id', 'Contact_no', 'D_id'], 'integer'],
            [['Fs_name', 'Email', 'Weekly_fuel_quota', 'Population_density'], 'string', 'max' => 25],
            [['Address', 'Remarks'], 'string', 'max' => 50],
            [['D_id'], 'exist', 'skipOnError' => true, 'targetClass' => Distributors::className(), 'targetAttribute' => ['D_id' => 'D_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Fs_id' => 'Fs ID',
            'Fs_name' => 'Fs Name',
            'Province_id' => 'Province ID',
            'District_id' => 'District ID',
            'City_id' => 'City ID',
            'Address' => 'Address',
            'Email' => 'Email',
            'Contact_no' => 'Contact No',
            'Weekly_fuel_quota' => 'Weekly Fuel Quota',
            'Population_density' => 'Population Density',
            'Remarks' => 'Remarks',
            'D_id' => 'D ID',
        ];
    }

    /**
     * Gets query for [[D]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getD()
    {
        return $this->hasOne(Distributors::className(), ['D_id' => 'D_id']);
    }

    /**
     * Gets query for [[Distributors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistributors()
    {
        return $this->hasMany(Distributors::className(), ['Fs_id' => 'Fs_id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Fs_id' => 'Fs_id']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['Fs_id' => 'Fs_id']);
    }

    /**
     * Gets query for [[Tokens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokens()
    {
        return $this->hasMany(Token::className(), ['Fs_id' => 'Fs_id']);
    }
}
