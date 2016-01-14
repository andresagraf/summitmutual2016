<?php
/*
 Template Name: Pagina modificación inscripción
 */

get_header(); 


  ?>

<section>
	<div class="container-fluid content_fondo_gracias" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/gracias_por_inscribirse.png);">
    <div class="container">
    	<div class="row cont_txt_gracias">
          	<h2>¡HAZ MODIFICADO EXITOSAMENTE TUS EVENTOS!</h2>
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
            	<h1>A MUTUAL SUMMIT 2016</h1>
            </div>
          	<div class="col-md-2"></div>
      		</div>
    </div>
    <div class="row">
    <p>Para seguir con el procedimiento y confirmar los cambios realizados</p>
                <a href="<?php get_home_url(); ?>/"><div class="bot_eventos_inscritos">Haz click aquí</div></a>

    </div>
	</div>
</section>	

<?php

get_footer();