<?php
$is_invalid = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
$mysqli = require __DIR__ . "/Database.php";
$sql = sprintf("SELECT *FROM `form` where email ='%s'",
              $mysqli->real_escape_string($_POST["email"]));
              $result= $mysqli->query($sql);
              $user = $result->fetch_assoc();
              
              if($user){
                if(password_verify($_POST["pass"], $user["password_hash"])){

                  session_start();
            
                  session_regenerate_id();
                  
                  $_SESSION["user_id"] = $user["id"];
                  
                  header("Location: index.php");
                  exit;
                }
              }
              $is_invalid = true;
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <?php
    if($is_invalid): ?>
    <em>Invalid Login</em>
    <?php 
    endif;
    ?>
    <h2>Login</h2>
    <form method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter password" name="pass" required>
      </div>
      <div class="input-box button">
        <button type="submit" name="submit">Login Now</button>
      </div>
      <div class="text">
        <h3>Don't have account? <a href="signup.php">Sign Up now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>