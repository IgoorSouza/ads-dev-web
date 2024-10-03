<?php 
    class ConnectionFactory {
        public $con = null;
        public $dbType = "mysql";
        public $host = "localhost";
        public $user = "root";
        public $senha = "vertrigo";
        public $db = "agenda";
        // se true, conexão se mantém até que o usuário pare de se comunicar com o sistema
        public $persistente = false;

        public function __construct($persistente = false) {
            if ($persistente != false) {
                $this->persistente = $persistente;
            }
        }

        public function getConnection() {
            try {
                // PDO = Persistent Data Object
                $this->con = new PDO(
                    $this->dbType . ":host=" . $this->host . ";dbname=" . $this->db,
                    $this->user,
                    $this->senha,
                    array(PDO::ATTR_PERSISTENT => $this->persistente,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                );

                return $this->con;
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }

        public function close() {
            if ($this->con != null) {
                $this->con = null;
            }
        }
    }
?>