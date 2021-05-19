<?php
/**
* Template Name: Customer Stories
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

      <?php
         $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type' => 'customer_stories',
          'posts_per_page' => 9,
          'paged' => $paged
        );
        $stories = new WP_Query($args);

        if($stories->have_posts()): ?>
            <div class="section regular-spacing">
            <div class="container">
              <div class="row" id="stories-container">
                <?php while($stories->have_posts()): $stories->the_post(); ?>
                <div class="col-12 col-md-4">
                  <div class="story-item mb-5">
                    <div><?php the_post_thumbnail('thumbnail'); ?></div>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button default"><?php echo __('Read More' , 'gsc'); ?></a>
                  </div>
                </div>

                <?php endwhile; ?>
          
              </div>

              <div class="row text-center">
                <div class="col-12">
                  <?php if($stories->max_num_pages > 1): ?>
                    <div class="button">
                      <a href="" id="load-more-stories" data-current="1" class="button loadmore"><?php echo __('Load more' , 'gsc'); ?></a>
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
            <div class="text-nav"><?php echo __('Back to a blog' , 'gsc'); ?></div>
              <div class="my-3">
                <a href="/blog" class="button default"><?php echo __('Resources' , 'gsc'); ?></a>
              </div>
          </div>
        </div>
      </div>
    </div>

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>