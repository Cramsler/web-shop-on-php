<?php

use yii\widgets\ActiveForm;

?>
<div style="align-items: center; justify-content: center; display: flex; padding-top: 20px">
    <h2>Оформление заказа</h2>
</div>
   <div class="container" style="padding: 20px">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($order, 'name') ?>
    <?= $form->field($order, 'email') ?>
    <?= $form->field($order, 'phone') ?>
    <?= $form->field($order, 'address') ?>
    <button class="btn btn-success">Оформить заказ</button>
    <?php ActiveForm::end(); ?>
</div>

