<?php

$registered_email = "mayank.agrawalbca@gmai.com";
$registered_pass = "mayank.agrawal";

$user_email = "mayank.agrawalbca@gmai.com";
$user_pass = "mayank.agrawal";

if($user_email === $registered_email && $user_pass === $registered_pass){
    echo "Login Sucessfull";
}else{
    echo "Crediantial Invalid";
}
