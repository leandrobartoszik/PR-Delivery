<?php
session_start();
error_reporting(0);
include('conexao.php');




$x = 0;

while ($x < 100) {
	
	
	$x++;

	$id_original = mysqli_real_escape_string($conexao, $_POST[$x]);
	$id = mysqli_real_escape_string($conexao, $_POST[$x]);


    echo $id_original." = ".$id."<br>";

	

		


	






}

