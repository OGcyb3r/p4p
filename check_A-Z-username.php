<?php


$alphas = array_merge(range('a', 'z'), range('A', 'Z'));

    $errors=array();
    $username=$_GET['id'];
    echo $username[0];
    if (empty($username)){
        array_push($errors, " *Username cannot be blank");
    }else if(!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
        array_push($errors, " ::Username can only contain alpha-numeric characters");
    }else if(!in_array($username[0],$alphas)){
        array_push($errors, " ::Username must begin with a letter");
    }else{
         echo " correct username";

         die;
    }

    echo $errors[0];
