<?php 
session_start();
include("classes/form.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Intranet AD71</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header></header>
	<nav></nav>
	<main>
		<div class="connexion">
			<?php 
			echo "test";
			$form = new Formulaire("post","test");
			$form->ajout_input("text","login","Login",true);
			$form->ajout_input("password","mdp","Mot de passe",true);
			$form->ajout_input("submit","submit","",true);
			echo $form->get_form();
			?>
		</div>
	</main>
</body>
</html>
