<?php
class Formulaire{
	private $form;

	function __construct($_method,$_action){
		$this->form="<form action=" . $_action . " method=" . $_method . ">";
	}

	function ajout_input($_type,$_name,$_required=false,$_placeholder=""){
		$this->form .= "<input type=" . $_type . " name=" . $_name;
		if($_required)
			$this->form .= "required";
		if(!empty($_placeholder))
			$this->form .= "placeholder =" . $_placeholder;
		$this->form .= "><br>";
	}

	function ajout_texte($_texte){
		$this->form .= "<p>" . $_texte ."</p><br>";
	}

	function get_form(){
		return $this->form . "</form>";
	}
}
?>