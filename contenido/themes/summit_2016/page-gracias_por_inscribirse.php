<?php
/*
 Template Name: Pagina gracias inscribirse
 */

get_header(); 


  ?>

<section>
	<div class="container-fluid content_fondo_gracias" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/gracias_por_inscribirse.png);">
    <div class="container">
    	<div class="row cont_txt_gracias">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
                <h2>¡GRACIAS POR INSCRIBIRTE!</h2>
                <h1>A MUTUAL SUMMIT 2016</h1>
                
            </div>
          	<div class="col-md-2"></div>
      		</div>
    </div>
    <div class="row">
    <p>Tus antecedentes se han recibido exitosamente, puedes revisar el detalle acá </p>
                <a href="/mis-charlas/"><div class="bot_eventos_inscritos">Eventos Inscritos</div></a>

    </div>
	</div>
</section>	

<?php

get_footer();