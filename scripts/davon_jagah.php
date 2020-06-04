<?php

  function introduce($fullname, $id, $language){
  	$introduction="Hello World, this is $fullname with HNGi7 ID $id using $language for stage 2 task";
  	return $introduction;
  }

 
  $fullname="Kazeem David";
  $id="HNG-00957";
  $language="PHP";
  $email="davonkaze1@gmail.com";
  

  if(isset($_GET['json']))
  {
  	echo json_encode(["fullname"=>$fullname , "id"=>$id , "language"=>$language, "email"=>$email]);
  }
  else{
  	echo introduce($fullname, $id, $language);
  }
?>