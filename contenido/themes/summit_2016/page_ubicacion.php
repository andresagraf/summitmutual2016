<?php
/*
 Template Name: Pagina Ubicacion
 */

get_header(); ?>

<section>
<div class="cabecera_pagina_interior_ubicacion">
        <div class="texto_slider3">
        <div class="container ">
    	
        <div class="row">
        	<div class="col-md-12"  >
           		 <h1>UBICACIÓN</h1>
            	
        	</div>
        </div>
        </div>
    </div>
	<img class="imagen_pagina" src="<?php echo get_template_directory_uri(); ?>/images/banner_ubicacion.png"  alt=""/> 

</div>

</section>
<section>
	<div class="container content_mapa ">
    	<div class="row">
        	<div class="col-md-4">
            <div  class="col-md-11 cont_comollegar">
            <h2>¿Cómo Llegar?</h2>
            <div class="row">
            	<div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/images/fecha_como_llegar.png" width="38" height="38" alt=""/></div>
            	<div class="col-md-1"></div>
           	  <div class="col-md-9 contenidos_llegar">
              	<strong>Fecha</strong>
                <p>8 de Octubre 2016</p>
              </div>                                
            </div>
            <div class="row">
            	<div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/images/horario_como_llegar.png" width="38" height="39" alt=""/></div>
            	<div class="col-md-1"></div>
           	  <div class="col-md-9 contenidos_llegar">
              	<strong>Horario</strong>
                <p>9:00 a 18:00 hrs</p>
              </div>                               
            </div>
            <div class="row">
            	<div class="col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/images/lugar_como_llegar.png" width="34" height="43" alt=""/></div>
            	<div class="col-md-1"></div>
    	       	  <div class="col-md-9 contenidos_llegar">
              	<strong>Lugar</strong>
                <p>Centro de Convenciones<br>ESPACIO RIESCO</p>
              </div>                                      
            </div>                        
            </div>
            
        	</div>
            <div class="col-md-8 cont_mapa_ubicacion" id="map_canvas">           
        	</div>
            
        </div>
    </div>
</section>

<section class="contenidos_enverde">

        <div class="container ">
    	
        <div class="row">
        	<div class="col-md-12">
           		             	
        	</div>
        </div>
        </div>


</section>


<?php include 'footer_ubicacion.php'; ?>
