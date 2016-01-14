<?php

session_start();

/*
var_dump($_POST);


echo "<table border='1'>";
echo "<tr>";
foreach ($_POST[form] as $key => $value) {

		echo "<td> ".$key.": ".$value." </td>";

}
echo "</tr>";
echo "</table>";


echo "<table border='1'>";

foreach ($_POST[d] as $key => $value) {

	echo "<tr>";

	foreach ($_POST[d][$key] as $llave => $valor) {
		echo "<td> BLOQUE ".$key." DIA ".$llave." </td>";
	}

	echo "</tr>";

}

echo "</table>";
*/



$rut=$_POST[form][rut];
$nombre=$_POST[form][nombre];
$apellido=$_POST[form][apellido];
$correo=$_POST[form][correo];
$telefono=$_POST[form][telefono];
$empresa=$_POST[form][empresa];
$cargo=$_POST[form][cargo];
$cliente= (isset($_POST[cliente])) ? $_POST[cliente] : "0" ;

	$mysqli = new mysqli("mysql.cronstudio.com", "cronstudio_user", "ytrewq", "wp_summit2016", 3306);
	
	$mysqli->query("SET NAMES 'utf8mb4'");

	$insert_usuario = $mysqli->prepare("INSERT INTO usuarios(rut,nombre,apellido,correo,telefono,empresa,cargo,cliente) VALUES (?,?,?,?,?,?,?,?)");
	$insert_usuario->bind_param("ssssissi", $rut, $nombre, $apellido, $correo, $telefono, $empresa, $cargo, $cliente);
	$insert_usuario->execute();
	$id_usuario = $mysqli->insert_id;
	$insert_usuario->close();

	$insert_calendario = $mysqli->prepare("INSERT INTO calendarios(usuario_id) VALUES (?)");
	$insert_calendario->bind_param("i", $id_usuario);
	$insert_calendario->execute();
	$id_calendario = $mysqli->insert_id;
	$insert_calendario->close();

	$insert_dia = $mysqli->prepare("INSERT INTO dias(bloque,dia,calendario_id) VALUES (?,?,?)");
	$insert_dia->bind_param("iii", $bloque, $dia, $id_calendario);
	
	foreach ($_POST[d] as $bloque => $value) {

		foreach ($_POST[d][$bloque] as $dia => $valor) {

			$insert_dia->execute();

		}

	}

	$insert_dia->close();



			header("location: /desarrollo/wp_summit2016/formulario/");

			exit(0);

?>