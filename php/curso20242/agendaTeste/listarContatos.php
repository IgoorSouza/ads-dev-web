<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <?php
        $conexao = mysqli_connect("localhost", "root", "vertrigo", "agenda");
        $dados = mysqli_query($conexao, "SELECT * FROM contato");

        $i = 1;
        while($usuario = mysqli_fetch_array($dados)){
            echo "<li> Contato nº $i: ". $usuario['nome'] ."</li>";
            $i++;
        }
    ?>
</body>
</html>