<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distributors".
 *
 * @property int $Distributor_id
 * @property string $Distributor_name
 * @property string $Location
 * @property string $Time
 * @property int $Truck_id
 * @property int $Token_id
 * @property string $Scan_device_status
 */
class Distributors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distributors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Distributor_name', 'Location', 'Time', 'Truck_id', 'Token_id', 'Scan_device_status'], 'required'],
            [['Time'], 'safe'],
            [['Truck_id', 'Token_id'], 'integer'],
            [['Distributor_name', 'Location', 'Scan_device_status'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Distributor_id' => 'Distributor ID',
            'Distributor_name' => 'Distributor Name',
            'Location' => 'Location',
            'Time' => 'Time',
            'Truck_id' => 'Truck ID',
            'Token_id' => 'Token ID',
            'Scan_device_status' => 'Scan Device Status',
        ];
    }
}
