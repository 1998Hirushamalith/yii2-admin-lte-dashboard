<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $Or_id
 * @property int $Or_type
 * @property int $Or_quantity
 * @property string $Or_price
 * @property string $Or_date
 * @property int $Quality_check
 * @property int $Fs_id
 *
 * @property Fuelstation $fs
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Or_type', 'Or_quantity', 'Or_price', 'Or_date', 'Quality_check', 'Fs_id'], 'required'],
            [['Or_type', 'Or_quantity', 'Quality_check', 'Fs_id'], 'integer'],
            [['Or_date'], 'safe'],
            [['Or_price'], 'string', 'max' => 25],
            [['Fs_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fuelstation::className(), 'targetAttribute' => ['Fs_id' => 'Fs_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Or_id' => 'Or ID',
            'Or_type' => 'Or Type',
            'Or_quantity' => 'Or Quantity',
            'Or_price' => 'Or Price',
            'Or_date' => 'Or Date',
            'Quality_check' => 'Quality Check',
            'Fs_id' => 'Fs ID',
        ];
    }

    /**
     * Gets query for [[Fs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFs()
    {
        return $this->hasOne(Fuelstation::className(), ['Fs_id' => 'Fs_id']);
    }
}
