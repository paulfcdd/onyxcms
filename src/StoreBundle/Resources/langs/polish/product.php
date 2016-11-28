<?php
return array(
    'brand' => 'Producent',
    'status' => 'Status',
    'bonus_points' => 'Punkty bonusowe',
    'price' => 'Cena',
    'quantity' => 'Ilość',
    'add_to_cart' => 'Do koszyka',
    'description_label' => 'Opis',
    'specifications_label' => 'Specyfikacje',
    'reviews' => 'Opinie',
    'title' => $product->getMetaTitle(),
    'description'=> $product->getMetaDescription(),
    'product'   => $product,
    'productData' => $productData,
    'manufacturer' => $manufacturer->getManufacturerName(),
    'stockStatus' => $status->getStatusName(),
);