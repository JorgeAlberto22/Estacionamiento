<?php
    $num = $_POST["clienteID"];
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $color = $_POST["color"];
    $tamanio = $_POST["tamanio"];
    $nombre = $_POST["registros_nombre"]

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "estacionamiento";
    $conn = new mysqli($server, $user, $password, $db);
    if($conn->connect_error){
        die("Falló la conexión: ".$conn->connect_error);
    }else{
        $sql_sentence = "INSERT INTO vehiculos (id, placas, marca, modelo, color, tamanio, cliente) VALUES (0, '".$matricula."', '".$marca."', '".$modelo."', '".$color."', '".$tamanio."', '".$num."')";
                if($conn->query($sql_sentence) === TRUE){
                    echo "<script>alert('Registro éxitoso');
                        location.href = 'nuevo_auto.php';
                        location.href.reload();</script>";
                }else{
                    echo $conn->error;
                }
    }
?>