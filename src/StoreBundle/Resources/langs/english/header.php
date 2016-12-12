<?php
return array (
    'wishlist' => 'Wishlist',
    'header' => 'This is header',
    'delivery' => 'Delivery',
    'my_account' => 'My account',
    'logout' => 'Logout',
    'cart' => 'Cart',
    'all_categories' => 'All categories',
    'empty_cart' => 'Cart is empty',
    'show_all' => 'Show all',
    'categories_mobile_view' => 'Categories',
    //System variables. Edit varibales in controller, not here!
    'isLogged' => $isLogged,
    'title' => $customerName,
    'categories' => $categories,
    'currencies' => $this->getAllData('Currency'),
    'langs' => $this->getAllData('Lang'),
);