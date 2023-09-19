<?php
//  Break on Condition task 3

function fibonacci($n){

    if($n == 0)return 0;
    elseif($n == 1) return 1;
    else return(fibonacci($n-1) + fibonacci($n-2));



}
$count = 0;

for($i =0; $count < 10; $i ++)
{
    $fibonacci1 = fibonacci($i);

if($fibonacci1 > 100)
{
    break;
}
echo $fibonacci1. " ";
$count++;
}


?>

