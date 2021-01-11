<?php


namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($good)
    {
        $_SESSION['cart'][$good->id] = [
            'name' => $good['name'],
            'price' => $good['price'],
            'img' => $good['img'],
        ];
    }
}