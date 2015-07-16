<?php
    mysql_connect('localhost','root','mysql');
    $db = "bcdatabase";

    mysql_select_db($db);

    $user = $_POST['user'];
    $password = ($_POST['password']);

    $query = "SELECT id FROM users WHERE user = '".$user."' AND password = '".$password."';";
    $resultado = mysql_query($query);
    if (mysql_num_rows($resultado) == 1){
        $fila = mysql_fetch_array($resultado);
        echo "Has iniciado sesion, ".$fila['user'];
        echo '<meta http-equiv="Refresh" content="5;url=main.html">';
    }else{
        echo "Login incorrecto";
        echo '<meta http-equiv="Refresh" content="5;url=index.html">';
    }
?>
