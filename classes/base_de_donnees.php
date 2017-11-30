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
			//var_dump($this->pdo->query($rqt));
			$stmt=$this->pdo->query($rqt);
			//var_dump($stmt);
			$rows = $stmt->fetchAll();

			foreach($rows as $row){
				echo $row[0]." ";
				echo $row[1]." ";
				echo $row[2]." ";
				echo $row[3]." ";
				echo $row[4]." ";
				echo $row[5]." ";
				echo $row[6]." <br/>";
			}
		}


	}



?>