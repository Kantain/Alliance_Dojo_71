<?php
class HTML{
	private $logo;
	private $charset;
	private $titre;
	private $css;

	public function __construct($_logo,$_charset,$_titre,$_css){
		$this->logo = $_logo;
		$this->charset = $_charset;
		$this->titre = $_titre;
		$this->css = $_css;
	}

	public function meta_data(){
		$code = "";
		if(!is_null($this->logo) && isset($this->logo))
			$code .= '<link rel="shortcut icon" type="image/x-icon" href="' . $this->logo . '">';

		if(!is_null($this->charset) && isset($this->charset))
			$code .= '<meta charset="' . $this->charset . '">';

		if(!is_null($this->titre) && isset($this->titre))
			$code .= '<title>' . $this->titre . '</title>';

		if(!is_null($this->css) && isset($this->css))
			$code .= '<link rel="stylesheet" href="style/' . $this->css . '">';

		return $code;
	}

	public function header($_texte=null){
		$code = "<header>";
		if(!is_null($_texte))
			$code .= $_texte;
		return $code .= "</header>";
	}

	public function menu_nav_prof(){
		$code = '<nav>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="">Ajouter un QCM</a></li>
						<li><a href="">Modifier un QCM</a></li>
						<li><a href="">Supprimer un QCM</a></li>
						<li><a href="">Mon compte</a></li>
					</ul>
				</nav>';
		return $code;
	}

	public function menu_nav_eleve(){
		$code ='<nav>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="">Mes QCM</a></li>
						<li><a href="">Mon compte</a></li>
					</ul>
				</nav>';
		return $code;
	}

	public function ecran_connexion(){
		$code = "<p>Connectez-vous</p>";

		$form_connexion = new form("connexion","fonctions/form_connexion.php","post","");
		$form_connexion->set_input("text","login","Login",1);
		$form_connexion->add_br();
		$form_connexion->set_input("password","password","Mot de passe",1);
		$form_connexion->add_br();
		$form_connexion->set_submit("validerconnexion","Connexion");
		$form_connexion->add_br();
		$code .= $form_connexion->get_form();

		return $code;
	}

	public function entree_anonyme(){
		$code = "";

		$form = new form("anonyme","adherent.php","post","");
		$form->set_submit("","Acces adhérent");

		return $code .= $form->get_form();
	}

	public function form_infos(){
		$code = "";

		$form = new form("infos_adherents","fonctions/traitement_form_infos.php","post","");
		$form->set_input("text","no_adherent","N° adhérent",1);
		$form->set_input("text","nom","Nom",1);
		$form->set_input("text","prenom","Prénom",1);
		$form->add_radio(2,"sexe",$array = ["H","F"]);

		return $code .= $form->get_form();
	}
}
?>