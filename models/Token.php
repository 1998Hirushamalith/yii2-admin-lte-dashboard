<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "token".
 *
 * @property int $T_id
 * @property string $QR_code
 * @property string $Usage_status
 * @property string $Date
 * @property string $Time
 * @property string $Tolerance
 * @property string $Weekly_balance
 * @property string $Validity_period
 */
class Token extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'token';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['QR_code', 'Usage_status', 'Date', 'Time', 'Tolerance', 'Weekly_balance', 'Validity_period'], 'required'],
            [['Usage_status'], 'string'],
            [['Date', 'Time'], 'safe'],
            [['QR_code', 'Tolerance', 'Weekly_balance', 'Validity_period'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'T_id' => 'T ID',
            'QR_code' => 'Qr Code',
            'Usage_status' => 'Usage Status',
            'Date' => 'Date',
            'Time' => 'Time',
            'Tolerance' => 'Tolerance',
            'Weekly_balance' => 'Weekly Balance',
            'Validity_period' => 'Validity Period',
        ];
    }
}
