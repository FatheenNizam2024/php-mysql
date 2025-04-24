<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Responsive Login Form</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="./login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel="stylesheet" href="./login_style.css">

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
    <form action="login_process.php" method="post">
    <h3>Username:</h3>
    <input type="text" name="name" placeholder="Username" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"/>
    <?php if(isset($_SESSION['username_error'])): ?>
        <div class="error-message"><?php echo $_SESSION['username_error']; ?></div>
        <?php unset($_SESSION['username_error']); ?>
    <?php endif; ?>
    <br>
    <h3>Password:</h3>
    <input type="password" name="password" placeholder="Password"/>
    <?php if(isset($_SESSION['password_error'])): ?>
        <div class="error-message"><?php echo $_SESSION['password_error']; ?></div>
        <?php unset($_SESSION['password_error']); ?>
    <?php endif; ?>
    <?php if(isset($_SESSION['error'])): ?>
        <div class="error-message"><?php echo $_SESSION['error']; ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <br>
    <input type="submit" name = "submit" value="Login" class="login-button"/>
    <br>
    <a href="signup.php" class="sign-up">Sign Up!</a>
    <br>
    </form>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="./script.js"></script>
</body>
</html>

