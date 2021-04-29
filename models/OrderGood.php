<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_good".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string|null $name
 * @property int|null $price
 * @property int|null $quantity
 * @property int|null $sum
 */
class OrderGood extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_good';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id'], 'required'],
            [['order_id', 'product_id', 'price', 'quantity', 'sum'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'name' => 'Name',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'sum' => 'Sum',
        ];
    }
}
