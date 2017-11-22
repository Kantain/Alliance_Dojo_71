<?php
	class bd{
		private $dsn ='mysql:host=localhost;port=3306;dbname=alliance_dojo_71';

		function connect(){
			try{

				$pdo = new PDO($dsn, 'root', '');
				


			}
			catch (PDOException $e){
				die("Erreur :". $e->getMessage());
			}
		}

		function requete($row){
			$requet="select * from jeux_video";
			$stmt=$pdo->query($requet);
			while($row = $stmt->fetch()){
				echo $row[0];
			}

			return $row;
		}


	}



?>