<?php
//even number task1
function printEvenNumber($start,$end,$step)
{
    for($i = $start; $i <= $end; $i +=$step){

        echo $i." ";
    }
}
printEvenNumber(2,20,2);
?>

