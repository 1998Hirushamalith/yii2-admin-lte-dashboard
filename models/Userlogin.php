<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userlogin".
 *
 * @property int $U_id
 * @property string $U_first_name
 * @property string $U_last_name
 * @property string $U_password
 * @property int $U_type
 * @property string $U_address
 * @property string $U_email
 * @property int $U_contact_no
 * @property int $T_id
 *
 * @property Token $t
 * @property Userregistration $u
 */
class Userlogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userlogin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['U_id', 'U_first_name', 'U_last_name', 'U_password', 'U_type', 'U_address', 'U_email', 'U_contact_no', 'T_id'], 'required'],
            [['U_id', 'U_type', 'U_contact_no', 'T_id'], 'integer'],
            [['U_first_name', 'U_last_name', 'U_password', 'U_email'], 'string', 'max' => 25],
            [['U_address'], 'string', 'max' => 50],
            [['T_id'], 'exist', 'skipOnError' => true, 'targetClass' => Token::className(), 'targetAttribute' => ['T_id' => 'T_id']],
            [['U_id'], 'exist', 'skipOnError' => true, 'targetClass' => Userregistration::className(), 'targetAttribute' => ['U_id' => 'U_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'U_id' => 'U ID',
            'U_first_name' => 'U First Name',
            'U_last_name' => 'U Last Name',
            'U_password' => 'U Password',
            'U_type' => 'U Type',
            'U_address' => 'U Address',
            'U_email' => 'U Email',
            'U_contact_no' => 'U Contact No',
            'T_id' => 'T ID',
        ];
    }

    /**
     * Gets query for [[T]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getT()
    {
        return $this->hasOne(Token::className(), ['T_id' => 'T_id']);
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
