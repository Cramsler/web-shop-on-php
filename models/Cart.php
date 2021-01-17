<?php


namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($good)
    {
        if (isset($_SESSION['cart'][$good->id])) {
            $_SESSION['cart'][$good->id]['goodQuantity'] += 1;
        } else {
            $_SESSION['cart'][$good->id] = [
                'goodQuantity' => 1,
                'name' => $good['name'],
                'price' => $good['price'],
                'img' => $good['img'],
            ];
        }
    }
}