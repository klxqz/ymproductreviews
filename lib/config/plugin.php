<?php

return array(
    'name' => 'Отзывы о товаре с Яндекс.Маркета',
    'description' => 'Вывод отзывов в карточке товара',
    'vendor' => '985310',
    'version' => '1.0.2',
    'img' => 'img/ymproductreviews.png',
    'shop_settings' => true,
    'frontend' => true,
    'icons' => array(
        16 => 'img/ymproductreviews.png',
    ),
    'handlers' => array(
        'backend_product_edit' => 'backendProductEdit',
        'frontend_product' => 'frontendProduct',
    ),
);
//EOF
