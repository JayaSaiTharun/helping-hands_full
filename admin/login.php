<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./stylelogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST" action="function.php">
    <h1>Admin Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="User ID" name="user" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" name="pass" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <input type="submit" name="login">
    </div>
  </form>
</div>

</body>
</html>
