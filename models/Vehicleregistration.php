<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicleregistration".
 *
 * @property int $Vr_id
 * @property string $Vr_date
 * @property string $Vr_venue
 * @property int $U_id
 *
 * @property Token[] $tokens
 * @property Userregistration $u
 */
class Vehicleregistration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicleregistration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Vr_date', 'Vr_venue', 'U_id'], 'required'],
            [['Vr_date'], 'safe'],
            [['U_id'], 'integer'],
            [['Vr_venue'], 'string', 'max' => 25],
            [['U_id'], 'exist', 'skipOnError' => true, 'targetClass' => Userregistration::className(), 'targetAttribute' => ['U_id' => 'U_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Vr_id' => 'Vr ID',
            'Vr_date' => 'Vr Date',
            'Vr_venue' => 'Vr Venue',
            'U_id' => 'U ID',
        ];
    }

    /**
     * Gets query for [[Tokens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokens()
    {
        return $this->hasMany(Token::className(), ['Vr_id' => 'Vr_id']);
    }

    /**
     * Gets query for [[U]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(Userregistration::className(), ['U_id' => 'U_id']);
    }
}
