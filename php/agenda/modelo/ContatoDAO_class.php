<?php
	include_once("ConnectionFactory_class.php");
	include_once("Contato_class.php");
	
	class ContatoDAO{
	
		public $con = null;
		
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
	
		public function cadastrar($cont){
			try{
				$stmt = $this->con->prepare(
				"INSERT INTO contato(nome, email, telefone)
				VALUES (:nome, :email, :telefone)");
				$stmt->bindValue(":nome", $cont->getNome());
				$stmt->bindValue(":email", $cont->getEmail());
				$stmt->bindValue(":telefone", $cont->getTelefone());
				
				$stmt->execute();
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		public function alterar($cont){
			try{
				$stmt = $this->con->prepare(
				"UPDATE contato SET nome=:nome, 
				email = :email, telefone=:telefone WHERE
				id=:id");
				
				$stmt->bindValue(":nome", $cont->getNome());
				$stmt->bindValue(":email", $cont->getEmail());
				$stmt->bindValue(":telefone", $cont->getTelefone());
				$stmt->bindValue(":id", $cont->getId());
				
				$this->con->beginTransaction();
			    $stmt->execute();
				$this->con->commit(); 
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}

		public function excluir($cont){
			try{
				$num = $this->con->exec("DELETE FROM contato WHERE id = " . $cont->getId());
				
				if($num >= 1){
					return 1;
				} else {
					return 0;
				}
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
	
		public function listar($query = null){		
			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM contato");
				} else {
					$dados = $this->con->query($query);
				}
				$lista = array();

				foreach($dados as $linha){
					$c = new Contato();
					$c->setId($linha["id"]);
					$c->setNome($linha["nome"]);
					$c->setTelefone($linha["telefone"]);
					$c->setEmail($linha["email"]);					
					$lista[] = $c;
				}
				return $lista;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		public function exibir($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM contato WHERE id = " . $id);
				
				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$c = new Contato();
				$c->setId($dado[0]["id"]);
				$c->setNome($dado[0]["nome"]);
				$c->setTelefone($dado[0]["telefone"]);
				$c->setEmail($dado[0]["email"]);
				
				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
	}


?>