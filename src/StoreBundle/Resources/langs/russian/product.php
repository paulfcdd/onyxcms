<?php
return array(
    'brand' => 'Производитель',
    'status' => 'Статус',
    'bonus_points' => 'Бонусные баллы',
    'price' => 'Цена',
    'quantity' => 'Кол-во',
    'add_to_cart' => 'В корзину',
    'description_label' => 'Описание',
    'specifications_label' => 'Характеристики',
    'reviews' => 'Отзывы',
    'title' => $product->getMetaTitle(),
    'description'=> $product->getMetaDescription(),
    'product'   => $product,
    'productData' => $productData,
    'manufacturer' => $manufacturer->getManufacturerName(),
    'stockStatus' => $status->getStatusName(),
);