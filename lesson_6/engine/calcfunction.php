<?php
function summa(int $x, int $y): int
{
    return $x + $y;
}

function minus(int $x, int $y): int
{
    return $x - $y;
}

function mult(int $x, int $y): int
{
    return $x * $y;
}

function div($x, $y)
{
    if ($y != 0) {
        return $x / $y;
    }
    else {
        echo "Error!";
    }
}