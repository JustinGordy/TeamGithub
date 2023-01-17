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
              <div class="row">
          
              <div class="col" id="form">
            <div class="text-center mt-5">
                
              <div class="card">
            
                <div class="container">
                <form action="/redirect.php" method="post">
                  <label for="fname">First name:</label><br>
                  <input type="text" id="fname" name="fname"><br>
                  <label for="lname">Last name:</label><br>
                  <input type="text" id="lname" name="lname"><br>
                  
                   <label for="email">Email:</label><br>
                  <input type="text" id="email" name="email"><br>
            
                         <label for="number">Phone Number:</label><br>
                  <input type="text" id="number" name="number"><br>
                  
                  <label for="know">How You Know Person?</label><br>
                  <select id="know" name="know">
                    <option value="friends">friends</option>
                    <option value="family">family </option>
                    <option value="co-worker">co-worker</option>
                  </select>
                  <br><br>
                  
                    <input type="submit" name="BTN_submit" value="Submit">
              </form>
                </div>
                </div>
              </div>
              </div>

                
              <div class="col" id="info" style="padding-top:48">
              <?php
                foreach ($json_encode as $data ) {
             
                  echo  "<div class='card'><p>";
                  echo "<strong>First Name:</strong> ".$data['fname']."<br>";
                  echo "<strong>Last Name:</strong> " .$data['lname']."<br>";
                  echo "<strong>Email:</strong> " .$data['email']."<br>";
                  echo "<strong>Number:</strong> " .$data['number']."<br>";
                  echo "<strong>Relationship:</strong> ".$data['know'];
                  echo "</p>";
                  echo '<a href="/form.php?id='.$data['id'].'" class="btn btn-primary" style="width: 100px; height: 40px;">Edit Info</a></div>';
                  echo "<br>";
                }







                ?>
              </div>

            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/templateFiles/js/scripts.js"></script>
    </body>
</html>
