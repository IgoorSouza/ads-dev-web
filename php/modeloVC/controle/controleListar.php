<?php
    $conexao = mysqli_connect("localhost", "root", "vertrigo", "agenda");
    $dados = mysqli_query($conexao, "SELECT * FROM contato");
    while ($usuario = mysqli_fetch_array($dados)) {
        $contatos[] = $usuario["nome"];
    }
?>