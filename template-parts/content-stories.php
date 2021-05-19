<div id="customer_stories" class="background-light section double-top-spacing regular-padding">
      <?php if(have_rows('section_customer_stories' , 'option')): ?>
        <div class="container">
          <div class="row">
            <?php while(have_rows('section_customer_stories' , 'option')): the_row(); ?>
            <div class="col-12 col-md-6">
              <h3><?php the_sub_field('h3'); ?></h3>
              <h2><?php the_sub_field('h2'); ?></h2>
            </div>
            <div class="col-12 col-md-6">
              <div class="user-number">
                <?php the_sub_field('user_number'); ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
        <?php endif; ?>
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
<?php wp_reset_postdata(); ?>