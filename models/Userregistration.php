<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userregistration".
 *
 * @property string $U_name
 * @property string $U_driving_license
 * @property string $U_revenue_license
 * @property string $U_insurance_card
 * @property string $U_certificate_of_registration
 * @property string $U_ommission_certificate
 * @property int $U_contact
 * @property int $U_id
 *
 * @property Userlogin[] $userlogins
 * @property Vehicleregistration[] $vehicleregistrations
 */
class Userregistration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userregistration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['U_name', 'U_driving_license', 'U_revenue_license', 'U_insurance_card', 'U_certificate_of_registration', 'U_ommission_certificate', 'U_contact'], 'required'],
            [['U_contact'], 'integer'],
            [['U_name', 'U_driving_license', 'U_revenue_license', 'U_insurance_card', 'U_certificate_of_registration', 'U_ommission_certificate'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'U_name' => 'U Name',
            'U_driving_license' => 'U Driving License',
            'U_revenue_license' => 'U Revenue License',
            'U_insurance_card' => 'U Insurance Card',
            'U_certificate_of_registration' => 'U Certificate Of Registration',
            'U_ommission_certificate' => 'U Ommission Certificate',
            'U_contact' => 'U Contact',
            'U_id' => 'U ID',
        ];
    }

    /**
     * Gets query for [[Userlogins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserlogins()
    {
        return $this->hasMany(Userlogin::className(), ['U_id' => 'U_id']);
    }

    /**
     * Gets query for [[Vehicleregistrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleregistrations()
    {
        return $this->hasMany(Vehicleregistration::className(), ['U_id' => 'U_id']);
    }
}
