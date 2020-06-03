<?php


function displayMessage($name, $email, $id, $language){

    $msg =  "Hello World, this is $name with HNGi7 ID $id and $email using $language for stage 2 task";
    return $msg;
}


echo displayMessage("Babatunde Adedolapo","dolapob@gmail.com", "HNG-02680","PHP");
?>