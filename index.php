<?php

$names = array();

$directory = "scripts/";


foreach(glob($directory . "*.{js,php,py}", GLOB_BRACE) as $filename){
    array_push($names,$filename);
}


foreach($names as $name){
echo "<pre>$name</pre>";
}


foreach($names as $name){
$output = shell_exec("php $name");
echo "<pre>$output</pre>";
}

?>