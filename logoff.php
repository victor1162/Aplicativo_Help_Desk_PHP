<?php 

	session_start();

	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';



	//remover indices do array de session

	unset($_SESSION['x']);

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a variavel de session

	session_destroy();

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	*/

	session_destroy();
	header('Location: index.php');
?>