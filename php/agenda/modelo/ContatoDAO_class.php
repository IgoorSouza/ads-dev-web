<?php
    include_once("ConnectionFactory_class.php");
    include_once("Contato_class.php");

    // DAO = Data Access Object
    class ContatoDao {
        public $con = null;

        public function __construct() {
            // $connectionFactory = new ConnectionFactory();
            // $this->con = $connectionFactory->getConnection();
            $this->con = new ConnectionFactory().getConnection();
        }

        public function cadastrar($contato) {
            try {
                $stmt = $this->con->prepare(
                    "INSERT INTO contato(nome, email, telefone) 
                    VALUES (:nome, :email, :telefone)"
                );

                $stmt->bindValue(":nome", $cont->getNome());
                $stmt->bindValue(":email", $cont->getEmail());
                $stmt->bindValue(":telefone", $cont->getTelefone());
                $stmt->execute();
                // $this->con->close();
                // $this->con = null;
            } catch (PDOException e) {
                echo "Erro: " . e->getMessage();
            }
        }
    }
?>