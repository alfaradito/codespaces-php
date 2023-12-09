<?php
  $name = "Alfa Radito";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fancy Login Page</title>
  <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
  <main>
    <div class="container">
      <!-- <div class="logo">
        <img src="logo.png" alt="Logo">
      </div> -->
      <div>
        <span>Hello <?php echo($name); ?>!</span>
      </div>
      <form action="#">
        <div class="input-field">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" required>
        </div>
        <div class="input-field">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Log In</button>
      </form>
      <a href="#">Forgot Password?</a>
      <a href="#">Create Account</a>
    </div>
  </main>

  <script src="./src/js/myJS.js"></script>
</body>
</html>
