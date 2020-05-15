<?php
require_once __DIR__ . '/../config/main.php';
require_once ENGINE_DIR . 'render.php';
require_once ENGINE_DIR . 'gallery_files.php';
require_once VENDOR_DIR . 'funcImgResize.php';

$imagesDir = PUBLIC_DIR . "/img/";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_FILES['my_file'])) {
        if(!file_exists($imagesDir)) {
            mkdir($imagesDir);
        }
    $org_name = $_FILES['my_file']['name'];
    $file_name = $imagesDir . $org_name;
    $size_file = $_FILES['my_file']['size'];
    move_uploaded_file(
    $_FILES['my_file']['tmp_name'],
    $file_name
    );
    img_resize($file_name, $imagesDir . "/small/" .$_FILES['my_file']['name'], 200, 150);
    saveImage($org_name, $org_name, $size_file);
}
header("Location: /myFolder/public/");
exit;
}
$files = array_filter (
    scandir($imagesDir),
    function ($item) use ($imagesDir) {
        return !is_dir($imagesDir . $item);
    }
);
$files = getGalleryFiles();

$form_title = "Загрузка файлов";
include VIEWS_DIR . "upload_form.php";
include VIEWS_DIR . "gallery.php";
include VIEWS_DIR . "photo.php";
?>




