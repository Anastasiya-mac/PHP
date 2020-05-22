<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'base.php';
require ENGINE_DIR . 'render_2.php';
require_once ENGINE_DIR . 'gallery_files.php';

session_start();
$cart =[];
if (!empty($_SESSION['cart'])) {
    $productIDs = array_keys($_SESSION['cart']);
    $items = getProductByIds($productIDs);
    foreach ($items as $item) {
        $cart[] = [
            'product' => $item,
            'count' => $_SESSION['cart'][$item['id_product']]
        ];
    }
}


echo render('cart_form', ['cart' => $cart]);