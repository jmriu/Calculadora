<?php
//Llamada al modelo
require_once("models/calcModel.php");

$calcmodel=new calc_model();
$datos=$calcmodel->get_operations();

//Llamada a la vista
require_once("views/calcView.php");



?>
