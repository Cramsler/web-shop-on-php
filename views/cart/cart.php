<?php if (!$session['cart']) : ?>

    <div style="display: flex; padding: 15px; justify-content: space-around; flex-direction: column; align-items: center">
        <h2>В вашей корзине ничего нет :(</h2>
        <button type="button" class="btn btn-secondary btn-close">Продолжить покупки</button>
    </div>

<?php endif; ?>

<?php if ($session['cart']) : ?>

    <h2 style="padding: 10px; text-align: center">Корзина</h2>

    <table class="table table-striped">

        <thead>
        <tr>
            <th scope="col">Фото</th>
            <th scope="col">Наименование</th>
            <th scope="col">Количество</th>
            <th scope="col">Цена</th>
            <th scope="col"></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($session['cart'] as $id => $good) : ?>
            <tr>
                <td style="vertical-align: middle" width="150"><img src="/img/<?= $good['img'] ?>"
                                                                    alt="<?= $good['name'] ?>"></td>
                <td style="vertical-align: middle"><?= $good['name'] ?></td>
                <td style="vertical-align: middle"><?= $good['goodQuantity'] ?></td>
                <td style="vertical-align: middle"><?= $good['price'] * $good['goodQuantity'] ?> рублей</td>
                <td class="delete" data-id="<?= $id ?>" style="text-align: center; cursor: pointer; vertical-align: middle; color: red">
                    <span>&#10006;</span></td>
            </tr>
        <?php endforeach; ?>
        <tr style="border-top: 4px solid black">
            <td colspan="4">Всего товаров</td>
            <td class="total-quantity"><?= $session['cart.totalQuantity'] ?></td>
        </tr>
        <tr>
            <td colspan="4">На сумму</td>
            <td style="font-weight: 700"><?= $session['cart.totalSum'] ?> рублей</td>
        </tr>
        </tbody>

    </table>

    <div class="modal-buttons" style="display: flex; padding: 15px; justify-content: space-around">
        <button type="button" class="btn btn-danger clear-cart">Очистить корзину</button>
        <button type="button" class="btn btn-secondary btn-close">Продолжить покупки</button>
        <button type="button" class="btn btn-success btn-next">Оформить заказ</button>
    </div>

<?php endif; ?>