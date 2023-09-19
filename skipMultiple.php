<?php
// skip multiple of 5
$numbers = 50;
for($i = 1; $i <=$numbers; $i++)
{
//  check the current number is multiple number is 5
    if($i%5 == 0)
    {
        continue;
    }
    echo $i." ";

}
?>