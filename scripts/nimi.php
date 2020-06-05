<?php


	function displayInfo(){
        $fName = "John Sani";
        $internship_ID = "HNG-02117";
        $email = "sanijohn2x@gmail.com";
        $lang = "PHP";
                
        $myInfo = "Hello World, this is {$fName} with HNGi7 ID {$internship_ID} and email {$email} using {$lang} for stage 2 task";
        echo($myInfo);
    }  

    displayInfo();

?>
