<h1><?=$product['name_product']?></h1>
<p><?=$product['about_product']?></p>
<img width="200"  src="http://192.168.64.2/myFolder/public/img/<?=$product['path_img']?>" alt="">
<div>
<div>
    В корзине: <?=$product['cart_count']?> товаров
</div>
    <form action="add_to_cart.php" method="post">
        <input type="hidden" name="product_id" value="<?=$product['id_product']?>">
        <input type="text" name="product_count">
        <input type="submit" value="Добавить в корзину">
    </form>
</div>