<?php
    $nome = $_GET["nome"];
    $tutor = $_GET["tutor"];

    echo "Nome: $nome <br/> Tutor: $tutor <br/>";
    
    $con = mysqli_connect("localhost", "root", "vertrigo", "veterinaria");
    $sql = "INSERT INTO animal (nome, tutor) VALUES ('$nome', '$tutor');";

    $resultado = mysqli_query($con, $sql);
?>