<?php

session_start();

$correo=$_POST[form][correo];

	$mysqli = new mysqli("mysql.cronstudio.com", "cronstudio_user", "ytrewq", "wp_summit2016", 3306);

	$mysqli->query("SET NAMES 'utf8mb4'");

	$resultado = $mysqli->query("SELECT c.calendario_id, u.usuario_id FROM usuarios as u, calendarios as c WHERE c.usuario_id = u.usuario_id AND u.correo = '".$correo."' ");


	if( $resultado->num_rows > 0 ) {

			$fila = $resultado->fetch_assoc();

			$_SESSION['user_summit']['tokken'] = $fila['usuario_id'];

			$_SESSION['user_summit']['calendario'] = $fila['calendario_id'];

   			header("location: /desarrollo/wp_summit2016/calendario/");

   			exit(0);

	}else{

			header("location: /desarrollo/wp_summit2016/login/");

			exit(0);
	
	}


?>