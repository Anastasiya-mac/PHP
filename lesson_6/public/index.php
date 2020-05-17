<?php 
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'base.php';
require_once ENGINE_DIR . 'gallery_files.php';

$product = getAllProduct();

include VIEWS_DIR . "catalog.php";
?>
