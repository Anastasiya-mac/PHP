<?php
require_once ENGINE_DIR . 'db.php';
function getGalleryFiles() {
    $sql = "SELECT * FROM images";
    return queryAll($sql);
}
function saveImage(string $filename, string $path, int $size) {
    $sql = "INSERT INTO images (name_image, path_img, size) VALUES ('{$filename}', '{$path}', '{$size}')";
    return execute($sql);
}
function getImage(int $id) {
$sql = "SELECT * FROM images WHERE id = {$id}";
return queryOne($sql);
}