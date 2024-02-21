<?php


$light_value = "green";

if($light_value === "red"){
    echo "Light is Red : Stop";
}else if($light_value === "yellow"){
    echo "Light is Yellow : Slow Down";
}elseif($light_value === "green"){
    echo "Light is Green : Go";
}else{
    echo "Invalid Color";
}