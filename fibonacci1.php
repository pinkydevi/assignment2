<?php
// Fibonacci Series printing using a Function Task 4
function printFibonacci($n)
{
    $fibonacciSeries = array();
    if($n>=1)
    $fibonacciSeries[] = 0;

    if($n>=2)
    $fibonacciSeries[] = 1;

    for($i = 2; $i < $n;$i++)
    {
        $fibonacciSeries[] = $fibonacciSeries[$i-1] + $fibonacciSeries[$i-2];
    }
    for($i =0; $i < $n;$i++)
    {
        echo $fibonacciSeries[$i]. " ";
    }

}
printFibonacci(15);
?>