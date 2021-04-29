const modal = $('.modal-content'); //Модальное окно

//Кнопка оформить заказ
modal.on('click', '.btn-next', function () {
    $.ajax({
        url: '/cart/order',
        type: 'GET',
        success: function (res){
            $('#order .modal-content').html(res);
            $('#cart').modal('hide');
            $('#order').modal('show');
        },
        error: function () {
            alert('ошибка');
        }
    })
})

//Открытие корзины
$('.cartOpen').on('click', function (event){
     event.preventDefault();
     $.ajax({
         url: '/cart/open',
         type: 'GET',
         success: function (res){
             $('#cart .modal-content').html(res);
             $('#cart').modal('show');
         },
         error: function () {
             alert('ошибка');
         }
     })
 })

//Очистка корзины
modal.on('click', '.clear-cart', function (event){
     event.preventDefault();
     if (confirm('Вы точно хотите очистить корзину?'))
     {
         $.ajax({
             url: '/cart/clear',
             type: 'GET',
             success: function (res){
                 $('#cart .modal-content').html(res);
             },
             error: function () {
                 alert('ошибка');
             }
         })
     }
 })

//Добавление в корзину
$('.product-button__add').on('click', function (event) {
    event.preventDefault();
    let name = $(this).data('name');
    $.ajax({
        url: '/cart/cart',
        data:  {name: name},
        type: 'GET',
        success: function (res){
            $('#cart .modal-content').html(res);

            //Счетчик товаров в корзине(прибавление)
            $('.menu-quantity').html('('+ $('.total-quantity').html() +')')
        },
        error: function () {
            alert('ошибка');
        }
    })
})

//закрытие модалки при нажатии на кнопку 'продолжить покупки'
modal.on('click', '.btn-close', function (){
    $('#cart').modal('hide');
})

//удаление строки с товаром
modal.on('click', '.delete', function (){
    let id = $(this).data('id');
    $.ajax({
        url: '/cart/delete',
        data:  {id: id},
        type: 'GET',
        success: function (res){
            $('#cart .modal-content').html(res);

            //Счетчик товаров в корзине(вычитание)
            if($('.total-quantity').html())
            {
                $('.menu-quantity').html('('+ $('.total-quantity').html() +')')
            } else {
                $('.menu-quantity').html('(0)')
            }

        },
        error: function () {
            alert('ошибка');
        }
    })
})

let split = window.location.href.split('/');
let id = split[split.length-1];
let nav = $('.nav-link');

for(let i = 0; i<nav.length; i++)
{
    if(nav[i].getAttribute('data-id') == id)
    {
        nav[i].classList.add('active');
        break;
    } else if (!id) {
        nav[0].classList.add('active');
        break;
    }
}