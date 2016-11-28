<?php
return array(
    'add_to_cart' => 'Add to cart',
    'title' => $subcategory,
    'products' => $products,
    'category' => $request->attributes->get('category'),
    'subcategory' => $request->attributes->get('subcategory'),
    'description' => 'Your description',
);