<?php
/**
* Template Name: Blog
*
* @package gsc
*/

get_header();


?>

	</header>

	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

      <?php while(have_posts()): the_post(); ?>
      <div class="section regular-spacing">
        <div class="container">
          <div class="row text-center w-60 center">
            <div class="col-12">
              <h2><?php the_title(); ?></h2>
            </div>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/search' , 'form'); ?>

        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8,
            'paged' => $paged
          );
          $blog = new WP_Query($args);

          if($blog->have_posts()): ?>

            <div class="section regular-spacing">
              <div class="container">
                <div class="row" id="blog-container">
                  <?php while($blog->have_posts()): $blog->the_post(); ?>
                  <div class="col-12 col-md-6">
                    <div class="blog-item mb-5">
                    
                      <?php 
                      $default_url = get_template_directory_uri().'/img/blog-default.png';
                      $src = !get_the_post_thumbnail_url()?$default_url:get_the_post_thumbnail_url(); 
                      ?>
                      <div><img src="<?php echo $src ?>" alt=""></div>
                      <div class="blog-meta my-2">
                        <?php echo get_the_date(); ?> / 
                        <?php the_author() ?> / 
                        <?php echo comments_number('0' , '1' , 'comments')." ".__('comment' , 'gsc'); ?>
                      </div>
                      <h2 class="entry-title"><?php the_title(); ?></h2>
                      <p><?php the_excerpt(); ?></p>
                      <a href="<?php the_permalink(); ?>" class="button default"><?php echo __('Read more' , 'gsc'); ?></a>
                    </div>
                  </div>

                  <?php endwhile; ?>
            
                </div>

                <div class="row text-center">
                  <div class="col-12">
                    <?php if($blog->max_num_pages > 1): ?>
                      <div class="button">
                        <a href="" id="load-more-posts" data-current="1" class="button loadmore"><?php echo __('Load more' , 'gsc'); ?></a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

          <?php endif; ?>

        <?php endwhile; ?>

        <div id="ressource-nav" class="section background-dark regular-padding">
          <div class="container">
            <div class="row">
              <div class="col-6 text-center border-right">
                <div class="text-nav"><?php echo __('Back to resources' , 'gsc'); ?></div>
                <div class="my-3">
                  <a href="/resources" class="button default"><?php echo __('Resources' , 'gsc'); ?></a>
                </div>
              </div>
              <div class="col-6 text-center">
                <div class="text-nav"><?php echo __('See our customer stories' , 'gsc'); ?></div>
                  <div class="my-3">
                    <a href="/customer-stories" class="button default"><?php echo __('Customer stories' , 'gsc'); ?></a>
                  </div>
              </div>
            </div>
          </div>
        </div>

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>