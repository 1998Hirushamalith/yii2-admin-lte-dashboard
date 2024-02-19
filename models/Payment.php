<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $Pay_id
 * @property string $Pay_date
 * @property string $Pay_time
 * @property string $Pay_type
 * @property string $Total_payment
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Pay_date', 'Pay_time', 'Pay_type', 'Total_payment'], 'required'],
            [['Pay_date', 'Pay_time'], 'safe'],
            [['Pay_type', 'Total_payment'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Pay_id' => 'Pay ID',
            'Pay_date' => 'Pay Date',
            'Pay_time' => 'Pay Time',
            'Pay_type' => 'Pay Type',
            'Total_payment' => 'Total Payment',
        ];
    }
}
