<?php
    include "Funcionario.php";

    $f = new Funcionario("Igor Souza", 1000);

    echo "O funcionario $f->nome recebe R$ $f->salario <br/>";

    $f->aumentaSalario(1000);
?>