<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <form action="/form.php" method="post">
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
      <br>
      
        <input type="submit" value="Submit">
    </form>
    <?php 
      echo $_POST["fname"]."<br>";
      echo $_POST["lname"]."<br>"; 
      echo $_POST["email"]."<br>";
      echo $_POST["know"]."<br>";

      ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>