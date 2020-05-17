<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'db.php';
require ENGINE_DIR . 'base.php';
require ENGINE_DIR . 'calcfunction.php';

$firstNumber = get('first_num');
$secondNumber = get('second_num');
$operation = get('operation');

switch ($operation) {
    case '+':
        $value = summa($firstNumber, $secondNumber);
        break;
    case '-':
        $value = minus($firstNumber, $secondNumber);
        break;
    case '*':
        $value = mult($firstNumber, $secondNumber);
        break;
    case '/':
        $value = div($firstNumber, $secondNumber);
        break;
    default: 
        $value = 0;
}
include VIEWS_DIR . "calcform.php";
?>
