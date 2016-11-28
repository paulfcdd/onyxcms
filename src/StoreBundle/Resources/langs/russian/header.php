<?php
return array (
    'wishlist' => 'Избранное',
    'header' => 'This is header',
    'delivery' => 'Доставка',
    'my_account' => 'Мой кабинет',
    'logout' => 'Выход',
    'cart' => 'Корзина',
    'all_categories' => 'Все категории',
    'empty_cart' => 'Корзина пуста',
    'show_all' => 'Показать все',
    'categories_mobile_view' => 'Категории',
    //System variables. Edit varibales in controller, not here!
    'isLogged' => $isLogged,
    'title' => $customerName,
    'categories' => $categories,
    'currencies' => $this->getAllData('Currency'),
    'langs' => $this->getAllData('Lang'),
);