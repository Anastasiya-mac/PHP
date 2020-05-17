<?php 
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'base.php';
require_once ENGINE_DIR . 'gallery_files.php';

$id = get('id');
$product = getProductById($id);

include VIEWS_DIR . "product_form.php";
?>