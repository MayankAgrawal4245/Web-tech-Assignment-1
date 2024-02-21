<?php

$title = "this title with the length more than 50 it is a greater title which have more than 50 words length";

if(strlen($title) > 50){
    $title = substr($title,0, 50);
    echo $title;
}else{
    echo $title;
}