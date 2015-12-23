<<<<<<< HEAD
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);


/** Loads the WordPress Environment and Template */
require('./wordpress/wp-blog-header.php');

=======
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<title>form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--favicon-->
	<link rel="shortcut icon" href="img/faviicon.jpg">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">

	<script src="js/script.js"></script>



</head>

<body>
	
	<div class="container">

<form action="action.php" method="post" role="form">
  
  <div class="form-group">
    <label>rut:</label>
    <input type="text" name="form[rut]" class="form-control" >
  </div>
  
  <div class="form-group">
    <label>Nombre:</label>
    <input type="text" name="form[nombre]" class="form-control" >
  </div>

  <div class="form-group">
    <label>apellido:</label>
    <input type="text" name="form[apellido]" class="form-control" >
  </div>

  <div class="form-group">
    <label>correo:</label>
    <input type="text" name="form[correo]" class="form-control" >
  </div>
  
  <div class="form-group">
    <label>telefono:</label>
    <input type="text" name="form[telefono]" class="form-control" >
  </div>

  <div class="form-group">
    <label>empresa:</label>
    <input type="text" name="form[empresa]" class="form-control" >
  </div>

  <div class="form-group">
    <label>cargo:</label>
    <input type="text" name="form[cargo]" class="form-control" >
  </div>

 <div class="form-group"> 

      <div class="checkbox">
        <label><input type="checkbox" name="cliente" value="1"> Es cliente</label>
      </div>
 
  </div>





<div class="checkbox">
  <label class="checkbox-inline"><input type="checkbox" name="d[1][1]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[1][2]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[1][3]" value="1">Option 1</label>
</div>

<div class="checkbox">
  <label class="checkbox-inline"><input type="checkbox" name="d[2][1]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[2][2]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[2][3]" value="1">Option 1</label>
</div>

<div class="checkbox">
  <label class="checkbox-inline"><input type="checkbox" name="d[3][1]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[3][2]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[3][3]" value="1">Option 1</label>
</div>

<div class="checkbox">
  <label class="checkbox-inline"><input type="checkbox" name="d[4][1]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[4][2]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[4][3]" value="1">Option 1</label>
</div>

<div class="checkbox">
  <label class="checkbox-inline"><input type="checkbox" name="d[5][1]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[5][2]" value="1">Option 1</label>
  <label class="checkbox-inline"><input type="checkbox" name="d[5][3]" value="1">Option 1</label>
</div>

 <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox">Selecionar Todos</label>
      </div>
    </div>
  </div>


  <button type="submit" class="btn btn-default">IMPIAR</button>  <button type="submit" class="btn btn-default">ENVIAR</button>

</form>

	</div>	

	</body>
</html>
>>>>>>> a6a0b06884be246b83c74b988a7d003cca468189
