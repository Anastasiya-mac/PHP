<?php
require_once ENGINE_DIR . "db.php";

function getAllProduct()
{
    return queryAll("SELECT * FROM product");
}

function getProductById($id)
{
    return queryOne("SELECT * FROM product WHERE id_product = {$id}");
}