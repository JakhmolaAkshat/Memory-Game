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
    <h2>Registration</h2>
    <form method="post" action="abc.php">
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="pass" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="password_confirmation" placeholder="Repeat password" required>
      </div>
      <div class="input-box button">
        <button type="Submit" name="submit">Register Now</button> 
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>