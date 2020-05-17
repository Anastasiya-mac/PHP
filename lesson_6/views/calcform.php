
<form action="" method="get">
    Введи первое число: <input type="number" name="first_num" /><br/>
    Введи второе число: <input type="number" name="second_num" /><br/>
    Ваша операция:
    <input name="operation" value="+" type="submit"/>
    <input name="operation" value="-" type="submit"/>
    <input name="operation" value="*" type="submit"/>
    <input name="operation" value="/" type="submit"/>
    <input name="result" value="<?php echo $value;?>"/>
</form>