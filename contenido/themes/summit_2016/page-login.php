<?php
/*
 Template Name: Pagina Login
 */

get_header(); 
  ?>


<section class="loginpage">
<h1 >REVISA TU AGENDA</h1>
<p>Para poder ingresar y visualizar tus charlas inscritas, tienes que escribir tu<br> <strong>e-mail</strong></p>
  <div class="container ">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 form_inscripcion wide_login">
        <form action="<?php echo get_template_directory_uri(); ?>/action-login.php" method="post" role="form">
          <input type="text" name="form[correo]" class="form-control in2_correo" placeholder="Correo:" >
          <button type="submit" class="btn_login">INGRESAR</button>
        </form>
      </div>
 <div class="col-md-4"></div>
    </div>
  </div>
</section>
<?php

get_footer();
