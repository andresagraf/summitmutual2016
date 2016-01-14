<!-- End Header-->
  
  
    <!-- Slider -->
                        
  <section>
    <div class="wide-container">
      <div id="carouel">
          <ul class="content_redes_home">
        					<?php while( have_rows('redes_sociales', 'option') ): the_row(); 
                    
                            // vars
                            $image2 = get_sub_field('imagen_red_social_home', 'option');
                            $content2 = get_sub_field('titulo_red_social', 'option');
                            $link2 = get_sub_field('direccion_red_social', 'option');
                    
                            ?>
                    
                    
                               <?php if( $link2 ): ?>
                                    <li><a href="<?php echo $link2; ?>" target="_blank">
                                <?php endif; ?>
                   
                                    <img src=" <?php echo $image2; ?>" alt="" />
                    
                                <?php if( $link2 ): ?>
                                    </a></li>
                                <?php endif; ?>
                    
                    

                    
                        <?php endwhile; ?>
</ul>
           <div class="content_form_inscripcion">
           		<a href="/formulario">
                <div class="boton_form_inscr">
                INSCRÍBETE<br>AQUÍ
                
                </div>
                </a>
           </div>
        <ul class="slides-container">
          <li>
            <div class="container">
              <div class="texto_slider">
                <div class="row">
                  <div class="col-md-5 titulo_summit">
                    <h1>MUTUAL<br>SUMMIT<br><span>2016</span></h1>
                  </div>

                  <div class="col-md-6 timming">
                    <span class="fecha"><?php
$format = "d F";
$timestamp = get_field('fecha_del_evento', 'option');
echo date_i18n($format, $timestamp);
?></span>

                    <span class="fecha"><?php $format = "g:i"; $timestamp = get_field('fecha_del_evento', 'option'); echo date_i18n($format, $timestamp); ?> hrs.</span>
                    <span class="fecha"> <?php the_field('ciudad_summit', 'option'); ?></span>
                    <ul id="example" class="contador">
                      <li><span class="days">00</span><p class="days_text">Días</p></li>
                      <li class="seperator">:</li>
                      <li><span class="hours">00</span><p class="hours_text">Horas</p></li>
                      <li class="seperator">:</li>
                      <li><span class="minutes">00</span><p class="minutes_text">Minutos</p></li>
                      <li class="seperator">:</li>
                      <li><span class="seconds">00</span><p class="seconds_text">Segundos</p></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="fx_slider"></div> 
            <img class="slidersimg" src="<?php echo get_template_directory_uri(); ?>/images/Landing.jpg"  alt=""/>
            </li>
        </ul>
      </div>
    </div>

  </section><!-- End Slider-->
 

 
 
 
 
 
 
 
