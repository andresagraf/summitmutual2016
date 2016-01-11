<?php
/*
 Template Name: Pagina Concurso
 */

get_header(); ?>

<section>
        <div class="container">
            <div class="row">
            	<div class="col-md-7 content_imagen_concurso" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imagen_fondo_concurso.jpg);">
                <div class="fx_concurso"></div>
                    <div class="texto_concurso">
                    	<div class="col-md-3"></div>
                    	<div class="col-md-7">
                            <h1>Participa por una<br>
                            experiencia</h1>
                            <span>SUMMIT 2016</span>
                            <p>Sé parte de MUTUAL 2016 y cuéntanos que temas te gustaría ver durante las charlas. Las propuestas más innovadoras podrán ganar grandes premios</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-5 content_form_concurso">
                <h2>Completa el Formulario</h2>
                <form>
                <input type="text" class="input_concurso in_rut" placeholder="Rut:">
                <input type="text" class="input_concurso in_nombre" placeholder="Nombre:">
                <input type="text" class="input_concurso in_apellido" placeholder="Apellido">
                <input type="text" class="input_concurso in_correo" placeholder="Correo:">
                <input type="text" class="input_concurso in_telefono" placeholder="Teléfono:">
				<textarea class="texta_concurso" rows="5" cols="30" placeholder="enter optional message"></textarea>
                <input type="submit" class="bot_participar" title="Participar" value="Participar">
                </form>
                
              </div>
            </div>
        </div>            


</section>
<section>
        <div class="container content_bases">
            <div class="row">
            <div class="col-md-2"></div>
				 <div class="col-md-8">
                <h3 class="tit_bases_concurso">BASES DEL CONCURSO</h3>
                <ul>
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li>
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	
              		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li>
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li>
               		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In feugiat urna sit amet finibus convallis.</li> 	                                         	                                                                                                     	                                                                                                    
                </ul>
                </div>
            </div>
        </div>
</section>

<?php
get_footer();
