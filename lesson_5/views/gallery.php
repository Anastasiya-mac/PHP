<?php foreach ($files as $image) :?>
    <a href="/photo.php?id<?=$image['id']?>" target = "_blank">
    <img width = "200" src="img/<?=$image['path']?>" alt=""></a>
<?php endforeach;?>