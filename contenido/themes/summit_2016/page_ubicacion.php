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
        	<div class="col-md-3 tit_buses_acercamiento">
            buses de acercamiento
           		             	
        	</div>
        </div>
        
        <div class="row">
        	<div class="col-md-4 content_mobiliz ">
           		<div class="col-md-11 col1">
                <h4>Transporte propio</h4>
                <p>Existen amplios estacionamientos, con vigilancia. Se recomienda tener en cuenta las demoras por las condiciones del tránsito, que desde las 8:00 pueden hacerse muy lentas, especialmente en la Avenida La Pirámide.</p>             	
                </div>
        	</div>
            <div class="col-md-4 cont_ctrl_ubic  content_mobiliz">
	       		<div class="col-md-11 col2">
    		   		<h4>Transporte público</h4>
            	    <p>Metro línea 2 / Bus B02</p>             	
                    </div>
        	</div>	             	
            <div class="col-md-4 content_mobiliz"  >
          		<div class="col-md-11 col3">
            <h4>Buses</h4>
                <p>VIGGO, auspiciador del Mutual Summit 2015, dispondrá de algunos buses para uso exclusivo de los asistentes. Estos cupos requieren inscripción previa y se asignarán en orden de inscripción ( enunez@mutual.cl)</p>   
			</div>           		             	
        	</div>
        	</div>

        </div>
        </div>


</section>
<section>

  <div class="container content_lugares_almorzar">
    	<div class="row">
        	<div class="col-md-3 tit_lugares_almor">
            LUGARES PARA ALMORZAR
           		             	
        	</div>
        </div>
   	<div class="row">
         <div class="col-md-4">
         <img src="<?php echo get_template_directory_uri(); ?>/images/imagen_restaurant_1.png" alt=""/>
         <h5>RESTAURANT VEGAN BUNKER</h5>
         <img src="<?php echo get_template_directory_uri(); ?>/images/icon_direccion.png" width="34" height="43" alt="" class="icono"/><p>AV. ITALIA 6790, SANTIAGO</p>
         </div>
         <div class="col-md-4">
         <img src="<?php echo get_template_directory_uri(); ?>/images/imagen_restaurant_2.png" alt="" />
         <h5>RESTAURANT VEGAN BUNKER</h5>
         <img src="<?php echo get_template_directory_uri(); ?>/images/icon_direccion.png" width="34" height="43" alt="" class="icono"/><p>AV. ITALIA 6790, SANTIAGO</p>
         </div>
         <div class="col-md-4">
         <img src="<?php echo get_template_directory_uri(); ?>/images/imagen_restaurant_1.png" alt="" class="icono"/>
         <h5>RESTAURANT VEGAN BUNKER</h5>
         <img src="<?php echo get_template_directory_uri(); ?>/images/icon_direccion.png" width="34" height="43" alt="" class="icono"/><p>AV. ITALIA 6790, SANTIAGO</p>
         </div>
   
</div>
</div>
</section>


<?php include 'footer_ubicacion.php'; ?>
