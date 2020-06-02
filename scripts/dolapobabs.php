<?php


function displayMessage($name, $id, $language){

    $msg =  "Hello World, this is $name with HNGi7 ID $id using $language for stage 2 task";
    return $msg;
}


echo displayMessage("Babatunde Adedolapo", "HNG-02680","PHP");
?>