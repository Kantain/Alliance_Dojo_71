<?php
	class bd{
		private $dsn ='mysql:host=localhost;port=3306;dbname=test; charset=utf8';
		private $pdo;


		function __construct(){
			try{
				$this->pdo = new PDO($this->dsn, 'root','');
			}
			catch (PDOException $e){
				die("Erreur :". $e->getMessage());
			}
		}

		function requete($rqt){
			$stmt=$this->pdo->query($rqt);
			$rows = $stmt->fetchAll();

			foreach($rows as $row){
				echo $row;
			}
		}


	}



?>