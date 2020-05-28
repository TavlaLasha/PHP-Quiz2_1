<?php
    $lang = "abcdefghijklmnopqrstuvwxyz";
    $name = $_POST['name'];
    $page = rand(50, 100);
    $price = $page*0.2;
    $word="";
    for($i=0; $i<11; $i++){
        $word+=$lang[rand(0, strlen($lang)-1)];
    }
    $bar = $word;
    $author = $_POST['auth'];
    $errC = 0;

    if(!isset($name) || trim($name == "")){
        $nameerr = "Required";
        $errC++;
    }else if(strlen($name)<2){
        $nameerr = "Too Small";
        $errC++;
    }else if(strlen($name)>100){
        $nameerr = "Too Big";
        $errC++;
    }
    if(!isset($author) || trim($author == "")){
        $autherr = "Required";
        $errC++;
    }else if(strlen($author)<5){
        $autherr = "Too Small";
        $errC++;
    }else if(strlen($author)>50){
        $autherr = "Too Big";
        $errC++;
    }

?>