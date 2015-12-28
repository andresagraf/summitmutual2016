 <?php wp_footer(); ?> 
  <footer>
    <div class="footer_gris">
      <div class="container">
        <div class="row">
          <div class="col-md-3 logo_footer"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo_summit_footer.png" width="229" height="70" alt=""/> </div>
          <div class="col-md-3 fot-menu-1">
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
					'items_wrap'      => '<ul id="%1$s" class="%2$s"><li><h6>Menu</h6></li>%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>
                </div>
            <div class="col-md-3 fot-menu-2">
            <h6>Contacto</h6>
            <p>fsdlkfñsdkfsñdlfksñdlfk</p>
          </div>
          <div class="col-md-3 fot-menu-3">
          <h6>Redes Sociales</h6>
            <div class="redes_sociales"> <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" width="47" height="36" alt=""/> <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png" width="41" height="36" alt=""/> <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" width="44" height="36" alt=""/> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" width="42" height="36" alt=""/> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_verde">
      <div class="container"> © 2015 <?php the_field('texto_footer', 'option'); ?> <!--SUMMIT CHILE | Todos los Derechos Reservados--> </div>
    </div>
  </footer><!-- End Footer-->
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- LLAMAR DIRECTO -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/countdown/jquery.countdown.min.js?v=1.0.0.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slider/jquery.superslides.js" type="text/javascript" charset="utf-8"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>
     <script type="text/javascript">
		$('#example').countdown({
			date: '5/24/2016 9:00:00',
			offset: -8,
			day: 'Día',
			days: 'Días',
			hour:'Hora',
			hours:'Horas',
			minute:'Minuto',
			minutes:'Minutos',
			second:'Segundo',
			seconds:'Segundos'
		}, function () {
			alert('Done!');
		});
		$('#carouel').superslides({
        inherit_width_from: '.wide-container',
        inherit_height_from: '.wide-container'
});
	</script>
