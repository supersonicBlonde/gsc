<?php
/**
* Single Post FAQ
*
* @package gsc
*/

get_header();


?>

	</header>

	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

		
			<div class="container">
					<div class="row">
					<!-- POST CONTENT -->
						<div class="col-8">
							<?php while(have_posts()): the_post(); ?>
								<?php quanta_set_post_views(get_the_ID()); ?>
								<!--mfunc <?php //quanta_post_views(get_the_ID()); ?> -->
								<h2><?php the_title(); ?></h2>
								<div class="blog-meta">
									<?php echo get_the_date(); ?> / 
									<?php the_author() ?> / 
									<?php echo comments_number('0' , '1' , 'comments')." ".__('comment' , 'gsc'); ?>
								</div>
								<div class="featured"><?php the_post_thumbnail('large'); ?></div>
								<div class="content">
									<?php the_content(); ?>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						
							<?php get_template_part('template-parts/cta' , 'single'); ?>

							<?php get_template_part('template-parts/content' , 'share'); ?>

						</div>

					<!-- SIDEBAR -->
					<div class="col-4">
						<div class="popular-posts">
							<h3><?php echo __('Most Popular' , 'gsc'); ?></h3>
					
							<?php 
							$popularpost = new WP_Query( array( 'post_type' => 'faq' , 'posts_per_page' => 5, 'meta_key' => 'quanta_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
							
							while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
								<div class="row align-items-center">
									<div class="col-3">
									<?php 
                      $default_url = get_template_directory_uri().'/img/blog-default.png';
                      $src = !get_the_post_thumbnail_url()?$default_url:get_the_post_thumbnail_url(get_the_ID() , 'thumbnail'); 
                  ?>
									<img src="<?php echo $src; ?>" alt="">
									</div>
									<div class="col-9">
										<h2><?php the_title(); ?></h2>
									</div>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<div class="tags mt-5">
							<h3><?php echo __('Tags' , 'gsc'); ?></h3>
							<div>
								<ul>
								<?php 
									$tags = get_tags(); 
								
									foreach($tags as $tag):
								?>
									<li><a class="underline" href="<?php echo $tag->slug; ?>"><?php echo strtolower($tag->name); ?></a></li>
								<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="container">
					<div class="col-12">
						<h3><?php echo __('Related Posts' , 'gsc'); ?></h3>
					</div>
					<div class="row">
						<?php 
							$related = new WP_Query( array( 'post_type' => 'faq' , 'posts_per_page' => 3 , 'orderby' => 'rand') );
							
							while ( $related->have_posts() ) : $related->the_post(); ?>

							<div class="col-md-4">
								<div class="blog-item">
									<?php 
									$default_url = get_template_directory_uri().'/img/blog-default.png';
									$src = !get_the_post_thumbnail_url()?$default_url:get_the_post_thumbnail_url(); 
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

			<div id="ressource-nav">
          <div class="container">
            <div class="row">
              <div class="col-6 text-center">
                <div><?php echo __('Back to resources' , 'gsc'); ?></div>
                <div class="button">
                  <a href="#" class="button default"><?php echo __('Resources' , 'gsc'); ?></a>
                </div>
              </div>
              <div class="col-6 text-center">
                <div><?php echo __('Back to a Blog' , 'gsc'); ?></div>
                  <div class="button">
                    <a href="#" class="button default"><?php echo __('Resources' , 'gsc'); ?></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
			

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>