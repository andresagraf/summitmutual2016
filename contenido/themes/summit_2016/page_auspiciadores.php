<?php
/*
 Template Name: Página Auspiciadores
 */

get_header(); ?>

<section>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 tit_auspiciadores">
            <h1 class="titulo_auspiciadores">AUSPICIADORES</h1>
            <?php while ( have_posts() ) : the_post();?>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis. Cras ut consectetur risus. Nunc elit tortor, porttitor ut consequat posuere, sodales tincidunt diam. Sed auctor urna ac eros laoreet imperdiet.</p>
  <?php endwhile; wp_reset_query(); ?>          
            
            </div>
        </div>
       	<div class="row auspicios">
        	<div class="col-md-2 caja_auspicios" style=" height:200px;">
            	<div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
<div class="titulo">titulo 1</div>
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
            </div>
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 2</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
            </div>
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 3</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
            </div>
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12 " >
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 4</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
            </div>
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 5</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
            </div>
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 6</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
                
            </div>
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 6</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
                
            </div>
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 6</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
                
            </div>        
        	<div class="col-md-2  caja_auspicios" style="height:200px;">
            	<div class="col-md-12" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/maqueta_auspicio.jpg" width="126" height="40" alt=""/>
                <div class="titulo">titulo 6</div>                
                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit. In feugiat urna sit amet.</p>
                </div>
                
            </div>                                                                                                       
                               
        </div>
                              
    
    </div>
</section>
<section class="content_ausp_azul">
	<div class="container">
    	<div class="row">
        	<div class="col-md-8">
            Si quieres que tu empresa forme parte de SUMMIT, toma contacto a <a href="mailto:lpineiro@seminarium.com">lpineiro@seminarium.com</a>
            </div>
            <div class="col-md-1">
            </div>
			<div class="col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_summit_auspiciadores.png" width="325" height="238" alt=""/> </div>            
        </div>
	</div>

</section>

<?php
get_footer();
