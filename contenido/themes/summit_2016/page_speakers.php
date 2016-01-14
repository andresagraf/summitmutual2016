<?php
/*
 Template Name: Pagina Speakers
 */

get_header(); ?>

<section>
<?php while ( have_posts() ) : the_post();?>
        <div class="container ">
        <div class="row">
        	<div class="col-md-12 tit_speakers ">
           		 <h1>¿DE QUE ESTÁN HABLANDO?</h1>
            	<p><?php the_content(); ?></p>
        	</div>
        </div>
        </div>
<?php endwhile;?>        
</section>
<section>
	<div class="container ">
    	<div class="row">
        <?php
				  query_posts( array( 'post_type' => 'speakers' ) );
				  if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>
       	  <div class="col-md-3">

            <div class="caja_speaker col-md-12">
                      <?php the_post_thumbnail( 'speaker-listado', array( 'class' => 'imagen_speker' ) ); ?>
                      <!--<img src="<?php //echo get_template_directory_uri(); ?>/images/ejemplo_speakers.png" width="130" height="130" alt=""/>-->

                      <div class="row">
                      <div class="col-md-2"></div>
                      <div class="nombre_speaker col-md-8">
                      	<h4><?php the_title(); ?></h4>
                        <span><?php the_field( "pais" ); ?> </span>
	                  </div>
                      <div class="col-md-2"></div>
	                </div>
                    <div class="row cargo_skeaker">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
	                    <p><?php the_field( "cargo" ); ?></p>
                    </div>
                    <div class="col-md-1"></div>
                    </div>
                    <div class="row rs_skeaker">
                    <?php if( get_field( "twitter" ) ): ?>
    					<a href="<?php the_field( "twitter" ); ?>" target="_blank">
                    		<img src="<?php echo get_template_directory_uri(); ?>/images/twitter_speaker.jpg" width="18" height="18" alt=""/>
						</a>
					<?php endif; ?>
                     <?php if( get_field( "linkedin" ) ): ?>
    					<a href="<?php the_field( "linkedin" ); ?>" target="_blank">
                    		<img src="<?php echo get_template_directory_uri(); ?>/images/linkeding.jpg" width="18" height="18" alt=""/>
						</a>
					<?php endif; ?>
    
              			
                    	
                    </div>
                    <div class="row vermas_box">
                    <a href="<?php echo get_permalink(); ?>">
                    <div class="ver_mas_speak">ver speakers</div>
              		</a>	
                    </div>
                    


            </div>
          </div>
                      	<?php endwhile; endif; wp_reset_query(); ?>

                                                                                                                                                                       
		</div>
	</div>
</section>

<?php
get_footer();
