<?php
	class bd{
		private $dsn ='mysql:host=localhost;port=3306;dbname=alliance_dojo_71';

		function connect(){
			try{

			}
			catch (PDOException $e){
				die("Erreur :". $e->getMessage());
			}
		}



	}



?>