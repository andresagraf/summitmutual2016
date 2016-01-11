 <?php wp_footer(); ?> 
  <footer>
    <div class="footer_gris">
      <div class="container">
        <div class="row">
          <div class="col-md-3 logo_footer"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo_summit_footer.png" width="229" height="70" alt=""/> </div>
          <div class="col-md-3 fot-menu-1">
           <h6>Menú</h6>
            			<?php

				$defaults = array(
					'theme_location'  => 'header-menu',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s"><li></li>%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>
                </div>
            <div class="col-md-3 fot-menu-2">
            <h6>Contacto</h6>
            <?php the_field('contacto_footer', 'option'); ?>
          </div>
          <div class="col-md-3 fot-menu-3">
          <h6>Redes Sociales</h6>
          <p>Encuéntranos en:</p>
            <div class="redes_sociales">
					<?php while( have_rows('redes_sociales', 'option') ): the_row(); 
                    
                            // vars
                            $image = get_sub_field('imagen_red_social_footer', 'option');
                            $content = get_sub_field('titulo_red_social', 'option');
                            $link = get_sub_field('direccion_red_social', 'option');
                    
                            ?>
                    
                    
                               <?php if( $link ): ?>
                                    <a href="<?php echo $link; ?>"  target="_blank">
                                <?php endif; ?>
                    
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                    
                                <?php if( $link ): ?>
                                    </a>
                                <?php endif; ?>
                    
                    

                    
                        <?php endwhile; ?>
            
            
            
            <!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/twitter.png" width="47" height="36" alt=""/> <img src="<?php //echo get_template_directory_uri(); ?>/images/pinterest.png" width="41" height="36" alt=""/> <img src="<?php //echo get_template_directory_uri(); ?>/images/instagram.png" width="44" height="36" alt=""/> <img src="<?php //echo get_template_directory_uri(); ?>/images/facebook.png" width="42" height="36" alt=""/>-->
            
             </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_verde">
      <div class="container">© 2016 <?php the_field('texto_footer', 'option'); ?> <!--SUMMIT CHILE | Todos los Derechos Reservados--> </div>
    </div>
  </footer><!-- End Footer-->
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- LLAMAR DIRECTO -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.map.js"></script>
     <script type="text/javascript">
	//<![CDATA[
						function load() {
							var lat = -33.3844647;
							var lng = -70.624842;
							// coordinates to latLng
							var latlng = new google.maps.LatLng(lat, lng);
							// map Options
							var myOptions = {
							  zoom: 16,
							  center: latlng,
							  mapTypeControl: false,
							   panControl: false,
     							zoomControl: false,
     							scaleControl: false,
 								streetViewControl: false,
							 scrollwheel: false,
        						mapTypeId: google.maps.MapTypeId.ROADMAP,
							   panControl: false,
						    zoomControl: true,
    							scaleControl: true,
								 style: google.maps.ZoomControlStyle.SMALL,

							};
	
							//draw a map
							var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
							var punto = new google.maps.LatLng(-33.3844647,-70.624842);
							var marker = new google.maps.Marker({
								position: map.getCenter(),
								map: map
							});
							  //var image = 'http://mutual.cronti.cl/Portals/0/ms_rhn/images/logotipo_mutual.png';
  var myLatLng = new google.maps.LatLng(-33.457497,-70.701202);
  var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });

							
							 
  var markerDluga = new google.maps.Marker({
      position: punto, 
      map: map, 
      //icon: 'images/punto_geo.png',
      title:"Cronstudio"
    });   
	
						}
						// call the function
						load();
						//]]>
	</script>
    
   

