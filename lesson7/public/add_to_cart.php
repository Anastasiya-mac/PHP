<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'base.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productID = (int) post('product_id');
    $productCount = (int) post('product_count');
    if (isset($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] += $productCount;
    }
    else {
        $_SESSION['cart'][$productID] = $productCount;
    }
    redirect($_SERVER['HTTP_REFERER']);
}