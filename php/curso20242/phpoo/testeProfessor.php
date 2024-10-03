<?php
    include "Professor.php";

    $prof = new Professor("Regina", 2500, "Engenharia");

    echo "Teste 1 <br/>";
    echo "O prof $prof->nome ministra a disciplina de $prof->disciplina e recebe R$ $prof->salario <br/><br/>";

    $prof->setDisciplina("Engenharia II");
    $prof->aumentaSalario(111);

    echo "Teste 2 <br/>";
    echo "O prof $prof->nome ministra a disciplina de $prof->disciplina e recebe R$ $prof->salario <br/><br/>";

    echo Professor::metodoTeste();
?>