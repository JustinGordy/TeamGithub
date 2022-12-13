<?php
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/data.json");
$json_encode = json_decode($jsonData , TRUE); // Converts the data into a PHP Array
$jsonData = array();
  
  if(isset($_POST["BTN_submit"])) {

$formData = array(
  $fname = $_POST["fname"],
  $lname = $_POST["lname"],
  $email = $_POST["email"],
  $number = $_POST["number"],
  $know = $_POST["know"]
);
    $data=array(
      'fname'=> $fname,
      'lname'=> $lname,
      'email'=> $email,
      'number'=> $number,
      'know'=> $know
      
    );

    $json_encode[]=$data;
      
    $json_encode = json_encode($json_encode, JSON_PRETTY_PRINT);

    file_put_contents('data.json', $json_encode);


header('Location: /index.php');


  
  
  }else{
    //do nothing
  }

?>