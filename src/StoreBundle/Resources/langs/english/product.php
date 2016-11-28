<?php
return array(
    'brand' => 'Brand',
    'status' => 'Status',
    'bonus_points' => 'Bonus points',
    'price' => 'Price',
    'quantity' => 'Quantity',
    'add_to_cart' => 'Add to cart',
    'description_label' => 'Description',
    'specifications_label' => 'Specifications',
    'reviews' => 'Reviews',
    'title' => $product->getMetaTitle(),
    'description'=> $product->getMetaDescription(),
    'product'   => $product,
    'productData' => $productData,
    'manufacturer' => $manufacturer->getManufacturerName(),
    'stockStatus' => $status->getStatusName(),
);