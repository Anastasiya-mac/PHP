<?php 
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'base.php';
require_once ENGINE_DIR . 'gallery_files.php';

session_start();
if(isset($_SESSION['user_id'])) {
    $product = getAllProduct();
}
else {
    redirect("inter.php");
}

include VIEWS_DIR . "catalog.php";
?>
