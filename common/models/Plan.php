<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property integer $id
 * @property string $from_address
 * @property string $to_address
 * @property string $from_date
 * @property string $to_date
 * @property string $time
 * @property string $days
 * @property string $name
 * @property string $phone
 * @property string $price
 * @property integer $price_negotiable
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from_address', 'to_address', 'from_date', 'to_date', 'time', 'days', 'name', 'phone', 'price'], 'required'],
            [['id', 'price_negotiable', 'status'], 'integer'],
            [['from_date', 'to_date', 'created_at', 'updated_at'], 'safe'],
            [['price'], 'number'],
            [['from_address', 'to_address'], 'string', 'max' => 255],
            [['time'], 'string', 'max' => 10],
            [['days', 'name', 'phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from_address' => 'From Address',
            'to_address' => 'To Address',
            'from_date' => 'From Date',
            'to_date' => 'To Date',
            'time' => 'Time',
            'days' => 'Days',
            'name' => 'Name',
            'phone' => 'Phone',
            'price' => 'Price',
            'price_negotiable' => 'Price Negotiable',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
