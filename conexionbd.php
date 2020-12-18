<?php

    define('DB_SERVER','162.241.60.169');
    define('DB_USERNAME','avaongco_formu');
    define('DB_PASSWORD','fj8SW^lPUf8I');
    define('DB_NAME','avaongco_form');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        echo("ERROR EN LA CONEXION " . mysqli_connect_error());
    }else {
        echo ('conexion exitosa');
    }
?>