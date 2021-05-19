<?php
/**
* Template Name: WorkSpace
*
* @package gsc
*/

get_header();


?>

	</header>


	<div class="primary global-container content-area top-spacing">

		<main id="main" class="site-main" role="main">

    <div class="section regular-spacing">
      <div class="container">
        <div class="row text-center w-60 center">
          <div class="col-12">
            <h1><?php the_field('page_title') ?></h1>
            <!-- V1 TO DELETE -->
           <!--  <div class="d-flex justify-content-center align-items-center my-5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/workspace.svg" alt="">
            <span class="plus">+</span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
            </div> -->
            <!-- /V1 TO DELETE -->
            <p><?php the_field('page_paragraph'); ?></p>
          </div>
        </div>
      </div>
    </div>

    <?php if(have_rows('steps_group')): while(have_rows('steps_group')): the_row();?> 
    <div class="section regular-spacing double-bottom-spacing">
      <div class="container-fluid">
        <?php get_template_part('template-parts/content' , 'steps'); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>

    <?php if(!empty(get_field('video'))): ?>
    <div class="section regular-spacing">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <div class="embed-responsive embed-responsive-16by9 shadowed">
              <?php the_field('video'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    


  <?php if(have_rows('sections')): ?>
    <div class="sections-two-col section regular-spacing">
      <div class="container">
        <?php while(have_rows('sections')): the_row(); ?> 
          <?php 
            $location_image = get_sub_field('location_image');
            $image = get_sub_field('image');
            $bg = !empty($image)?esc_url($image['url']):"";
          ?>
          <div class="row section regular-spacing">
            <div class="col-12 col-md-7 <?php echo $location_image=='right'?'offset-md-1':''?> background-image <?php echo $location_image; ?>" style="background-image:url(<?php echo $bg; ?>)">
    </div>
            <div class="col-12 col-md-4 col">
                <h3><?php the_sub_field('title'); ?></h3>
                <h2><?php the_sub_field('sub_title'); ?></h2>
                <p><?php the_sub_field('paragraph'); ?></p>
                <?php 
                  $text_button = get_sub_field('text_button'); 
                  $link_button = get_sub_field('link_button'); 
                  if(!empty($text_button) && !empty($link_button)): ?>
                  <div class="mt-3">
                    <a href="<?php echo $link_button; ?>" class="button default"><?php echo $text_button; ?></a>
                  </div>
                 <?php endif;
                ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if(have_rows('icon_section')): ?>
    <div id="sections-icon" class="section regular-spacing">
      <div class="container">
        <?php while(have_rows('icon_section')): the_row(); ?> 
        <?php if(have_rows('icon_col')): ?>
          <div class="row text-center">
          <?php while(have_rows('icon_col')): the_row(); ?> 
            <?php $icon = get_sub_field('icon'); ?>
            <div class="col-12 col-md-4 px-md-4">
              <div class="mb-3"><img src="<?php echo $icon['url'] ?>" alt=""></div>
              <div class='icon-text my-3'><?php the_sub_field('text') ?></div>
              <div class="my-3">
                <a href="<?php the_sub_field('link_button')?>" class="button default"><?php the_sub_field('text_button') ?></a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- customer stories -->
		<?php get_template_part("template-parts/content" , "stories"); ?>

   
	  <?php get_template_part("template-parts/content" , "cta"); ?>
		

    <div id="section_faq" class="background-light section regular-padding">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
              <h3>Faq</h3>
              <h2>Want to know more ?</h2>
          </div>
          <div class="col-12 col-md-4">
              <p class="mb-5">If you have any questions about us or our product, you can find the answer in our FAQ.</p>
              <?php 
                $query = new WP_Query(array('post_type' => 'faq' , 'posts_per_page' => 5));

                if($query->have_posts()):
              ?>
                <ul class="mb-5">
                  <?php while($query->have_posts()): $query->the_post(); ?>
                  <li class="mb-4"><a href="<?php the_permalink(); ?>" class="read-more small d-flex align-items-center"><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
                </ul>
                <?php endif; ?>
              <div class="mt-4">
                <a href="/welcome-to-our-faq" class="button default">Search our FAQ</a>
              </div>
          </div>
        </div>
      </div>
    </div>

		

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>