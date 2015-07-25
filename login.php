<?php
    session_start();
        @$conexion=mysql_connect("localhost","root","mysql") or die ("No
        se pudo conectar con el servidor");
        mysql_select_db("bcdatabase",$conexion) or die
        ("No se pudo seleccionar la BD");
    //mysql_select_db($db);
    $user = $_POST['user'];
    $password = ($_POST['password']);
    $query = "SELECT * FROM users WHERE user = '".$user."' AND password = '".$password."';";
    $resultado = mysql_query($query);
    if (mysql_num_rows($resultado) == 1){
        $fila = mysql_fetch_array($resultado);
                $usuario = $fila['user'];
                $_SESSION['userweb'] = $usuario;
        echo "Has iniciado sesion, " .$usuario;
        echo '<meta http-equiv="Refresh" content="5;url=main.php">';
    }else{
        echo "Login incorrecto";
        echo '<meta http-equiv="Refresh" content="5;url=index.php">';
    }
?>
