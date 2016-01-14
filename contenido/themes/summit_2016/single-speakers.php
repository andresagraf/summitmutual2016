<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package summit_2016
 */

get_header(); ?>


<section>
<?php 
query_posts('page_id=11'); 
while (have_posts ()): the_post(); 
?> 
        <div class="container ">
        <div class="row">
        	<div class="col-md-12 tit_speakers ">
           		 <h1>¿DE QUE ESTÁN HABLANDO?</h1>
            	<p><?php the_content(); ?></p>
        	</div>
        </div>
        </div>
<?php endwhile; wp_reset_query(); ?>       
</section>


<?php while ( have_posts() ) : the_post();?>
<section>
	<div class="container">
    	<div class="row content_single_speaker">
        	<div class="col-md-1"></div>
            <div class="col-md-4">
            <div class="row">
            <?php the_post_thumbnail('speaker-single'); ?>
            </div>
            <div class="row">
			<div class="content_pic_speaker">
			<?php if( get_field( "twitter" ) ): ?>
    					<a href="<?php the_field( "twitter" ); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter_interior_single.jpg" width="35" height="34" alt=""/>
						</a>
					<?php endif; ?>
                     <?php if( get_field( "linkedin" ) ): ?>
    					<a href="<?php the_field( "linkedin" ); ?>" target="_blank">
                    		<img src="<?php echo get_template_directory_uri(); ?>/images/lkn_interior_single.jpg" width="33" height="34" alt=""/>
						</a>
					<?php endif; ?>
			</div>
            </div>                    
            </div>
            <div class="col-md-6">
            	<div class="row">
                <div class="col-md-6">
                <div class="tit_spk_m_charlas"><?php the_title(); ?></div>
                </div>
                <div class="col-md-4"></div>
                </div>
                
               	<div class="nombre_charla_spk_m_charlas"> <span><?php the_field( "pais" ); ?> </span></div>
               	<div class="cargo_spk_m_charlas"><?php the_field( "cargo" ); ?></div>
	<?php the_content(); ?>
            </div>
        
        </div>
</div>
</section>
<?php endwhile;?>  
<?php
get_footer();
