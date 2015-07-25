<?php
session_start();
if(isset($_SESSION['userweb']))
{
@header('Location: main.php');
}
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Business Connect - Login</title>

    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body><br/><br/>
    <div class="login-card">
    <h2>
      <img src="css/logo.png" align="middle"></img><br/><br/>
      Login
    </h2>
  <form id="formulario1" action="login.php" method="POST">
    <input type="text" name="user" required placeholder="User">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  </body>
</html>
