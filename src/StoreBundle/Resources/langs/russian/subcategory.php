<?php
return array(
    'add_to_cart' => 'В корзину',
    'title' => $subcategory,
    'products' => $products,
    'category' => $request->attributes->get('category'),
    'subcategory' => $request->attributes->get('subcategory'),
    'description' => 'Your description',
);