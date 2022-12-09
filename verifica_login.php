<?php 
error_reporting(0);

 ?>

<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: index.php');
	exit();
}
?>