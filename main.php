<html>
  <head>
    <title>Business Connect</title>
  </head>
  <body>
    <?php
    if(!isset($_SESSION['userweb']))
    {
    ?>
        <h1>Bienvenido</h1>
    <?php
    }else
    {
     echo "Debes de loguearte para ver el contenido del sitio.";
     echo '<meta http-equiv="Refresh" content="5;url=index.php">';
    }
    ?>
	</body>
</html>
