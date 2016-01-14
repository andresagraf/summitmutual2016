<?php
/*
 Template Name: Pagina Programa
 */

get_header(); ?>
<section>
<?php while ( have_posts() ) : the_post();?>
<div class="cabecera_pagina_interior">
        <div class="texto_slider2">
        <div class="container ">
    	
        <div class="row">
        	<div class="col-md-12"  >
                   		 <h1>PROGRAMA SUMMIT 2016</h1>
            	<p><?php the_content(); ?></p>
        	</div>
        </div>
        </div>
    </div>
    <div class="fx_slider2">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/fx_header.png"  alt=""/>
    </div>


	<img class="imagen_pagina" src="<?php the_field('imagen_programa'); ?>"  alt=""/> 

</div>
<?php endwhile;?>
</section>
<section>

<div class="container content_mapa">
	<div class="row">
    	<div class="col-md-4">
        	<div class="caja-dia">MARTES 24 MAYO</div>
            <?php
				  query_posts( array( 'post_type' => 'calendario', 'dia' => '24-de-mayo' ) );
				  if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>
            <div class="caja-charlas-dia">
            <div class="charla_dia">
                <div class="hora_charla col-md-3">
                9:10hrs.
                </div>
            	<div  class="col-md-1"></div>
                <div  class="col-md-8 texto_charla">
                  <?php the_title(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
            </div>
            	<?php endwhile; endif; wp_reset_query(); ?>
         </div>
        <div class="col-md-4">
        	<div class="caja-dia">MIÉRCOLES 25 MAYO</div>        
            <div class="caja-charlas-dia">
            
            
            <div class="charla_dia">
                <div class="hora_charla col-md-3">
                9:10hrs.
                </div>
            	<div  class="col-md-1"></div>
                <div  class="col-md-8 texto_charla">
                Palabras de Gustavo Vicuña M.: Presidente del Directorio Mutual de Seguridad CChC.
                </div>
            </div>
                                 
            
            
            </div>         
        </div>
        <div class="col-md-4">
        	<div class="caja-dia">JUEVES 26 MAYO</div>        
            <div class="caja-charlas-dia">
            <div class="charla_dia">
                <div class="hora_charla col-md-3">
                9:10hrs.
                </div>
            	<div  class="col-md-1"></div>
                <div  class="col-md-8 texto_charla">
                Palabras de Gustavo Vicuña M.: Presidente del Directorio Mutual de Seguridad CChC.
                </div>
            </div>                                                   
            </div>           
        </div>
    </div>

</div>

</section>
<section>
<div class="container">
	<div class="row">
<h3 class="mesa_redonda">MESA REDONDA</h3>
</div>
<div class="row">



    <div class="listado_mesas">
        	<div class="dia_mesa_redonda">
        <h4>MESA DÍA 24</h4>
        <P>TARDE</P>
        </div>
    	<div class="charla col-md-2">LEGISLACIÓN SEGURIDAD EN DESARROLLO EN CHILE</div>
        <div class="charla col-md-2">DESAFIOS Y RIESGOS EMERGENTES EN EMPRESAS Y PAÍS</div>
        <div class="charla col-md-2">SISTEMAS DE GESTIÓN MODELOS EXITOSOS</div>
        <div class="charla col-md-2">MODELO DE CULTURA DE SEGURIDAD</div>
        <div class="charla col-md-2">BUENAS PRÁCTICAS EMPRESAS LIDERES</div>
    </div>
</div>
<div class="row">



    <div class="listado_mesas2">
        	<div class="dia_mesa_redonda">
        <h4>MESA DÍA 25</h4>
        <P>TARDE</P>
        </div>
    	<div class="charla col-md-2">LEGISLACIÓN SEGURIDAD EN DESARROLLO EN CHILE</div>
        <div class="charla col-md-2">DESAFIOS Y RIESGOS EMERGENTES EN EMPRESAS Y PAÍS</div>
        <div class="charla col-md-2">SISTEMAS DE GESTIÓN MODELOS EXITOSOS</div>
        <div class="charla col-md-2">MODELO DE CULTURA DE SEGURIDAD</div>
        <div class="charla col-md-2">BUENAS PRÁCTICAS EMPRESAS LIDERES</div>
    </div>
</div>


</div>
</section>



<?php
get_footer();
