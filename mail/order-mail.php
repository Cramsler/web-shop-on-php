<h3>Ваш заказ под номером <?= $order->id ?> принят к исполнению</h3>
Ваш телефон: <?= $order->phone ?>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Наименование</th>
            <th>Количество</th>
            <th>Цена</th>
            <th>Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($session['cart'] as $id=>$item) :?>
        <tr>
            <td><?=$item['name']?></td>
            <td><?=$item['goodQuantity']?></td>
            <td><?=$item['price']?></td>
            <td><?=$item['price'] * $item['goodQuantity']?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Итого:</td>
            <td><?= $session['cart.totalQuantity'] ?> шт.</td>
        </tr>
        <tr>
            <td colspan="3">На сумму:</td>
            <td><b><?= $session['cart.totalSum'] ?></b> рублей</td>
        </tr>
        </tbody>
    </table>
</div>
