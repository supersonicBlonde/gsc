<?php
/**
* Template Name: Resources
*
* @package gsc
*/

get_header();


?>

	</header>

	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

      <div class="section regular-spacing">
        <div class="container">
          <div class="row text-center w-60 center">
            <div class="col-12">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/search' , 'form'); ?>


      <div class="section border-padding" id="latest-blog">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3>Latest in blog</h3>
            </div>
          </div>
          <div class="row">
            <?php
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 2
              );
                $id_ar = [];

                $query = new WP_Query($args);

                if($query->have_posts()):
                
                  while($query->have_posts()): $query->the_post(); 
                  $id_ar[] = get_the_ID(); 
                  ?>
                  
                  <div class="col-12 col-md-6">
                    <div class="blogitem">
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
                      <?php $content = get_the_content(); ?>
                      <p><?php echo wp_trim_words($content); ?></p>
                      <a href="<?php the_permalink(); ?>" class="button default"><?php echo __('Read more' , 'gsc'); ?></a>
                    </div>
                  </div>
                 <?php endwhile;
                endif; wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>

    

      <div class="section regular-spacing">
        <div class="container">
            <div class="row">
                <!-- COLUMN LEFT BLOG AND TESTIMONIALS -->
                <div class="col-12 col-md-8">
                  <div class="container">
                    <?php get_template_part('template-parts/resource' , 'blog', $id_ar); ?>
                    <?php get_template_part('template-parts/resource' , 'stories'); ?>
                  </div>
                </div>
                 <!-- COLUMN LEFT BLOG AND TESTIMONIALS -->
                 <div class="col-12 col-md-4">
                 <?php get_template_part('template-parts/sidebar', 'faq') ?> 
                 </div>
            </div>
        </div>
      </div>

    
		<?php get_template_part("template-parts/content" , "cta"); ?>
		

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>