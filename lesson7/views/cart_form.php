<h3>Товары в корзине:</h3>
<?php if(empty($cart)):?>
    <div>Корзина пуста!</div>
<?php else:?>
    <?php foreach ($cart as $item):?>
        <div><?=$item['product']['name_product']?> :
            <?=$item['count']?>
            <img width="100"  src="http://192.168.64.2/myFolder/public/img/<?=$product['path_img']?>" alt="">
        </div>
    <?php endforeach;?>
<?php endif;?>