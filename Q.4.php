<?php

$score = 67;

if($score<60){
    echo "The Grade is F";
}else if($score>60 and $score<70){
    echo "The Grade is D";
}
else if($score>70 and $score<80){
    echo "The Grade is C";
}
else if($score>80 and $score<90){
    echo "The Grade is B";
}
else{
    echo "The Grade is A";
}