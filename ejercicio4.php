<?php

$num = 9;

if($num % 3 === 0 && $num % 5 === 0)
    {
        echo "FizzBuzz";
    }elseif($num % 5 === 0){
        echo "Buzz";
    }elseif($num % 3 === 0 )
    {
        echo "Fizz";
    }