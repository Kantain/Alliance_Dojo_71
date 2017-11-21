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
		<div>
			<?php 
			echo "test";
			$form = new Formulaire("post","test");
			$form->ajout_input("text","login");
			$form->ajout_input("password","mdp");
			$form->ajout_input("submit","submit");
			echo $form->get_form();
			?>
		</div>
	</main>
</body>
</html>
