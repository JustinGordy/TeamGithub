<?php 
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/data.json");
$json_encode = json_decode($jsonData , TRUE); // Converts the data into a PHP Array
usort($json_encode, fn($a, $b) => $a['lname'] <=> $b['lname']);

?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/templateFiles/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/templateFiles/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php'); ?>
        </nav>
        <!-- Page content-->
  <div class="row">
      <div class="col-md-10 offset-md-2">
        <div class="container">
            <div class="text-center mt-5">
              <div class="card w-75">
                <div class="card-body">
                <?php 
              foreach ($json_encode as $data ) {
                if($data['know']=="friends"){
                  echo $data['fname']."<br>";    
                  echo $data['lname']."<br>";
                  echo $data['email']."<br>";
                  echo $data['number']."<br>";
                  echo $data['know']."<br>";
                  echo '<a href="/form.php" class="btn btn-primary">Edit Info</a><br><hr>';                  
                }
              }
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/templateFiles/js/scripts.js"></script>
    </body>
</html>
