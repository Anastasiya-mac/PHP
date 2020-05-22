<?php 
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'base.php';
require_once ENGINE_DIR . 'gallery_files.php';

session_start();
$id = get('id');
$product = getProductById($id);
if (!empty($_SESSION['cart'][$product['id_product']])) {
    $product['cart_count'] = $_SESSION['cart'][$product['id_product']];
}
else {
    $product['cart_count'] = 0;
}
include VIEWS_DIR . "product_form.php";
?>