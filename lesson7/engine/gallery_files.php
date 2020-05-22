<?php
require_once ENGINE_DIR . "db.php";

function getAllProduct()
{
    return queryAll("SELECT * FROM product");
}

function getProductById(int $id)
{
    return queryOne("SELECT * FROM product WHERE id_product = {$id}");
}

function getProductByIds(array $ids)
{   $in = implode(",", $ids);
    return queryAll("SELECT * FROM product WHERE id_product IN ({$in})");
}