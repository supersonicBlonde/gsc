<?php
/**
* Template Name: Home
*
* @package gsc
*/

get_header();


?>

	</header>


  <div class="primary global-container" class="content-area top-spacing">

    <main id="main" class="site-main" role="main">

    <?php if( have_rows('home_flexible') ): ?>
      <?php while( have_rows('home_flexible') ): the_row(); ?>
          <?php if( get_row_layout() == 'hero' ):
         
            get_template_part('template-parts/content' , 'hero');

          elseif( get_row_layout() == 'section_slider_logos' ): 

            get_template_part('template-parts/content' , 'sliderlogos');

          elseif( get_row_layout() == 'section_slider_logos' ): 

              get_template_part('template-parts/content' , 'sliderlogos');
          
          elseif( get_row_layout() == 'section_video' ): 

              get_template_part('template-parts/content' , 'videolist');

          elseif( get_row_layout() == 'section_multi_colonnes' ): 

              get_template_part('template-parts/content' , 'multicolonnes');
            
          elseif( get_row_layout() == 'section_customer_stories_flexible' ): ?>

            <div id="customer_stories_flexible" class="background-light section regular-spacing regular-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <h3><?php the_sub_field('stories_H3'); ?></h3>
                      <h2><?php the_sub_field('stories_h2'); ?></h2>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="user-number">
                        <?php the_sub_field('stories_user_number'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                        <?php 
                        $args = array(
                          'post_type' => 'testimonies',
                          'posts_oer_page' => -1,
                          'post_status' => 'publish'
                        );

                        $query = new WP_Query($args);
                        if($query->have_posts()): ?>

                        <div id="stories-list">
                          <?php while($query->have_posts()): $query->the_post(); ?>
                          <div class="story-item text-center">
                            <p><i><?php the_field('story') ?></i></p>
                            <div class="story-name mt-4"><?php the_field('customer_name') ?></div>
                          </div>
                          <?php endwhile; ?>
                        </div>

                        <?php endif; ?>
                      </div>
                  </div>
                  <div class="row text-center mt-5">
                      <div class="col-12">
                        <a href="/customer-stories" class="button default"><?php echo  __('Read more customer stories' , 'gsc'); ?></a>
                      </div>
                  </div>
              </div>
            </div>	
            <?php wp_reset_postdata(); 

            elseif( get_row_layout() == 'section_cta_flexible' ): ?>

              <div id="section_cta" class="section background-dark text-center regular-padding regular-spacing">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col"></div>
                    <div class="col-md-4 col-12">
                        <h2><?php the_sub_field('cta_heading'); ?></h2>
                        <p><?php the_sub_field('cta_paragraph'); ?></p>
                    </div>
                    <div class="col"></div>
                  </div>
                  <div class="row text-center mt-3">
                      <div class="col-12">
                        <a href="<?php the_sub_field('link_button') ?>" class="button default"><?php the_sub_field('cta_heading') ?></a>
                      </div>
                  </div>
                </div>
              </div>

            <?php  elseif( get_row_layout() == 'section_faq_flexible' ): ?>

              <div id="section_faq" class="background-light section regular-padding regular-spacing">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-md-6">
                        <h3><?php the_sub_field('heading_red'); ?></h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <h2><?php the_sub_field('heading_black'); ?></h2>
                    </div>
                    <div class="col-12 col-md-4">
                        <p><?php the_sub_field('paragraph'); ?></p>
                        <div class="mt-1">
                        <a href="<?php the_sub_field('link_button'); ?>" class="button default"><?php the_sub_field('text_button'); ?></a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              
         <?php  endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

    	<!-- customer stories -->
			<?php //get_template_part("template-parts/content" , "stories"); ?>

      <?php //get_template_part("template-parts/content" , "cta"); ?>

      <?php //get_template_part('template-parts/content' , 'faq'); ?>

    </main>
  </div>


<?php get_footer(); ?>