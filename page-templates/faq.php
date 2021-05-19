<?php
/**
* Template Name: Faq
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
      <?php endwhile; ?>

      
      <div class="background-light section regular-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="bold mb-3">Search for the answers</div>
          </div>
          <div class="row justify-content-center">
            <div class="col"></div>
            <div class="col-5">
            <form role="search" data-url="<?php echo admin_url('admin-ajax.php'); ?>"  method="post" id="search-faq" class="text-center">
              <div class="form-group">
                <input type="search"  name="s" class="form-control" placeholder="<?php echo __('Type keyword to search for content. e.g. tutorial...' , 'gsc'); ?>"/>
              </div>
              <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('submission_nonce'); ?>">
              <input type="hidden" name="action" value="search_faq">
              <button type="submit" class="button default"><?php echo __('Submit' , 'gsc'); ?></button>
            </form>
            </div>
            <div class="col"></div>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div id="results">

      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type' => 'faq',
          'posts_per_page' => 16,
          'paged' => $paged
        );
        $faq = new WP_Query($args);

        if($faq->have_posts()): ?>
          <div class="section regular-spacing">
            <div class="container">
              <div class="row" id="faq-container">
                <?php while($faq->have_posts()): $faq->the_post(); ?>
                <div class="col-12 col-md-3">
                  <div class="faq-item mb-5">
                  <?php 
                      $default_url = get_template_directory_uri().'/img/blog-default.png';
                      $src = !get_the_post_thumbnail_url()?$default_url:get_the_post_thumbnail_url(); 
                      ?>
                    <div><img src="<?php echo $src ?>" alt=""></div>
                    <div class="blog-meta my-2">
                        <?php echo get_the_date(); ?> <!-- /  -->
                        <?php //the_author() ?> <!-- /  -->
                        <?php // echo comments_number('0' , '1' , 'comments')." ".__('comment' , 'gsc'); ?>
                      </div>
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button default"><?php echo __('Read More' , 'gsc'); ?></a>
                  </div>
                </div>

                <?php endwhile; ?>
          
              </div>

              <div class="row text-center">
                <div class="col-12">
                  <?php if($faq->max_num_pages > 1): ?>
                    <div class="button">
                      <a href="" class="button default" id="load-more-faqs" data-current="1"><?php echo __('Load more' , 'gsc'); ?></a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?>

      </div>

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
                    <a href="/customer-stories" class="button default"><?php echo __('Customer stories' , 'gsc'); ?></a>
                  </div>
              </div>
            </div>
          </div>
        </div>


		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>