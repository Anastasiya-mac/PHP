<?php
require_once __DIR__ . '/../config/main.php';
require_once ENGINE_DIR . 'gallery_files.php';
$id = $_GET['id'];
$image = getImage($id);

include VIEWS_DIR . "photo.php";