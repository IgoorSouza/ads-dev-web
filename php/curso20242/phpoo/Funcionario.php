<?php
    class Funcionario {
        var $nome, $salario;

        function __construct($n, $s){
            $this->nome = $n;
            $this->salario = $s;
        }

        function aumentaSalario($valor){
            $this->salario += $valor;

            echo "Salario atualizado para R$ $this->salario! <br><br>";
        }
    }
?>