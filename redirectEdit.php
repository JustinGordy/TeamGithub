<?php
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/data.json");
$json_encode = json_decode($jsonData , TRUE); // Converts the data into a PHP Array


foreach($json_encode as $key => $data){
  if($data['id'] == $_GET['id']) {
    $dataFname = $data['fname'];
    $dataLname = $data['lname'];
    $dataEmail = $data['email'];
    $dataNumber = $data['number'];
    $dataKnow = $data['know'];
    $keyEdit = $key;
       
  }
}

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $know = $_POST["know"];



$json_encode[$keyEdit]['fname'] = $fname;
$json_encode[$keyEdit]['lname'] = $lname;
$json_encode[$keyEdit]['email'] = $email;
$json_encode[$keyEdit]['number'] = $number;
$json_encode[$keyEdit]['know'] = $know;


    $json_encode = json_encode($json_encode, JSON_PRETTY_PRINT);

    file_put_contents('data.json', $json_encode);





header('Location: /index.php');

// echo '<pre>';
// print_r($json_encode);
// echo '</pre>';



   
      





  



?>