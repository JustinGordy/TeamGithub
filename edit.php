<?php
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/data.json");
$json_encode = json_decode($jsonData , TRUE); // Converts the data into a PHP Array

  
  $i = 1;
  foreach ($json_encode as $key => &$record) {
      $record['id'] = $i;
      $i++;

    // echo $record['id']."<br>";
    // echo $i."<hr>";
    
  }
  
  // $jsonData now contains a unique ID for each record

      
    $json_encode = json_encode($json_encode, JSON_PRETTY_PRINT);

    file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/data.json", $json_encode);


echo '<pre>';
print_r($json_encode);
echo '</pre>';


?>