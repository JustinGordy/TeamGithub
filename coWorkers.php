<?php 
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/data.json");
$json_encode = json_decode($jsonData , TRUE); // Converts the data into a PHP Array
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
        <div class="container">
            <div class="text-center mt-5">
                <h1>A Bootstrap 5 Starter Template</h1>
                <p class="lead"><?php 
              foreach ($json_encode as $data ) {
                if($data['know']=="co-worker"){
                  echo $data['fname']."<br>";
                  echo $data['lname']."<br>";
                  echo $data['email']."<br>";
                  echo $data['number']."<br>";
                  echo $data['know']."<br><hr>";
                }
              }
                ?>
                </p>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/templateFiles/js/scripts.js"></script>
    </body>
</html>
