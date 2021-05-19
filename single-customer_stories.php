<?php
/**
* Single Post
*
* @package gsc
*/

get_header();


?>

	</header>

	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

		<div class="section regular-spacing">
			<div class="container section padding-bottom-border">
				<div class="row">
        <?php while(have_posts()): the_post(); ?>
					<div class="col-4">
				
					<h2><?php the_title(); ?></h2>
					<div class="featured"><?php the_post_thumbnail('medium'); ?></div>
					<div class="excerpt">
						<?php the_excerpt(); ?>
					</div>
					</div>
					<div class="col-8">
              <?php the_content(); ?>
						<?php get_template_part('template-parts/content' , 'share'); ?>
					</div>
				</div>
        <?php endwhile; wp_reset_postdata(); ?>
			</div>

			<div class="section half-padding">
				<div class="container">
					<div class="col-12">
						<h3><?php echo __('Related Posts' , 'gsc'); ?></h3>
					</div>
					<div class="row">
						<?php 
							$related = new WP_Query( array( 'post_type' => 'customer_stories', 'posts_per_page' => 3 , 'orderby' => 'rand') );
							
							while ( $related->have_posts() ) : $related->the_post(); ?>

							<div class="col-md-4">
								<div class="related-item">
									<?php 
									$default_url = get_template_directory_uri().'/img/blog-default.png';
									
									$src = !get_the_post_thumbnail_url(get_the_ID() , 'thumbnail')?$default_url:get_the_post_thumbnail_url(get_the_ID() , 'thumbnail'); 
									?>
									<div><img src="<?php echo $src ?>" alt=""></div>
									<h2><?php the_title(); ?></h2>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                </div>
							</div>

							<?php endwhile; wp_reset_postdata(); ?>

					</div>
				</div>
			</div>
		</div>

			<div id="ressource-nav" class="section background-dark regular-padding">
          <div class="container">
            <div class="row">
              <div class="col-6 text-center border-right">
                <div class="text-nav"><?php echo __('Back to customer stories' , 'gsc'); ?></div>
                <div class="my-3">
                  <a href="#" class="button default"><?php echo __('Resources' , 'gsc'); ?></a>
                </div>
              </div>
              <div class="col-6 text-center">
                <div class="text-nav"><?php echo __('Back to a Blog' , 'gsc'); ?></div>
                  <div class="my-3">
                    <a href="#" class="button default"><?php echo __('Resources' , 'gsc'); ?></a>
                  </div>
              </div>
            </div>
          </div>
        </div>

			

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>