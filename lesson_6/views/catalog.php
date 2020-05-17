<h1>Каталог товаров</h1>
<?php foreach ($product as $item): ?>
    <div class="product">
        <a href="http://192.168.64.2/myFolder/public/product.php?id=<?=$item['id_product']?>"> 
            <h2><?=$item['name_product']?></h2>
        </a>
    </div>
<?php endforeach; ?>
