<?php
return array (
    'wishlist' => 'Lista życzeń',
    'header' => 'This is header',
    'delivery' => 'Dostawa',
    'my_account' => 'Moje konto',
    'logout' => 'Wyłoguj',
    'cart' => 'Koszyk',
    'all_categories' => 'Wszystkie kategorie',
    'empty_cart' => 'Koszyk pusty',
    'show_all' => 'Pokaż wszystkie',
    'categories_mobile_view' => 'Kategorie',
    //System variables. Edit varibales in controller, not here
    'isLogged' => $isLogged,
    'title' => $customerName,
    'categories' => $categories,
    'currencies' => $this->findAllFromRepository('currency'),
    'langs' => $this->findAllFromRepository('lang'),
);