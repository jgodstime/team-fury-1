<?php
  function parse_scripts($toJson = false, $prettify = false) {
    // scan directory for files matching pattern(s)
    // store filename in object variable
    $cli = [
      'py' => 'python',
      'js' => 'node',
      'php' => 'php',
      'java' => 'java',
      'dart' => 'dart'
    ];
    
    $regex = '/Hello World, this is ([a-zA-Z\s]+) with HNGi7 ID (HNG-\d{5}) and email ([_a-z0-9-]+[\.[_a-z0-9-]+]*@[a-z0-9-]+[\.[a-z0-9-]+]*.[a-z]{2,3}) using ([\w\s]+) for stage 2 task/i';
    $totalResults = [];
    $passCount = 0;
    $failCount = 0;
    $totalCount = 0;
      
    foreach (glob("scripts/*.{js,py,php}", GLOB_BRACE) as $filename) {
      $fileExt = pathinfo($filename, PATHINFO_EXTENSION);
      // echo "$fileExt , $filename \n";
      
      $result = new stdClass();

      // for each file, execute the appropriate CLI program
      $output = shell_exec("$cli[$fileExt] $filename");  

      // if success then
      if ($output) {
        // parse output with regex
        $matched = preg_match($regex, $output, $matches);
          // if regex match
          if ($matched) {
            // store fullname in property
            $result->fullname = $matches[1];

            // store ID in property
            $result->id = $matches[2];
            
            // store email in property
            $result->email = $matches[3];

            // store language in a property
            $result->language = $matches[4];

            // store passed in property
            $result->status = "pass";
            $result->output = $output;
            $result->file = $filename;

            $passCount += 1;
          }
          else {
          // else
            // store fail for result property   
            $result->status = "fail";
            $result->output = $output;
            $result->file = $filename;
            $failCount += 1;
            $result->fullname = "undefined";  
            $result->email = "undefined";          
            $result->id = "undefined";    
            $result->language = "undefined";
          }
      }
      else {
        // store fail for result property in object variable
        $result->status = "fail";
        $result->output = "Invalid script found - $filename";
        $result->file = $filename;
        $failCount +=1;
        $result->email = "undefined";
        $result->fullname = "undefined";            
        $result->id = "undefined";    
        $result->language = "undefined";
      }

      $totalResults[] = $result;   
      $totalCount += 1;
    }

    $summary = new stdClass();
    $summary->totalResults = $totalResults;
    $summary->passCount = $passCount;
    $summary->failCount = $failCount;
    $summary->totalCount = $totalCount;

    if ($toJson) {
      // return json
      if($prettify){
        $summary = "<pre>".json_encode($totalResults, JSON_PRETTY_PRINT)."</pre>";
      }
      else {
        $summary = json_encode($totalResults);
      }
      
    }    

    return $summary;
  }
  
?>