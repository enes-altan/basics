<?php
declare(strict_types = 1);

function sum(int $num1 , int $num2){
    return ($num1+$num2);
}

//echo sum(5,'15'); // this is an error
echo sum(5,15);
/*
 * if declare strict types one , should be sent int value to sum func
 * */
?>