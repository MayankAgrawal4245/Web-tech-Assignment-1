<?php

$step_walked = 858;

if ($step_walked<5000){
    echo "Begginers";
}else if($step_walked>5000 and $step_walked < 10000){
    echo "Intermediate";
}else{
    echo "Advance";
}