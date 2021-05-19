<div id="section2" class="section regular-spacing">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
          <h3><?php the_sub_field('title_home_2'); ?></h3>
          <h2><?php the_sub_field('paragraph_home_2'); ?></h2>
      </div>
    </div>
    <?php if(have_rows('logos_slider_home_2')): ?>
    <div class="row">
      <div class="logos-slider" class="slider">
          <?php while(have_rows('logos_slider_home_2')): the_row(); ?>
            <?php $logo =  get_sub_field('logo'); ?>
            <div><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_url($logo['alt']); ?>"></div>
          <?php endwhile; ?>
    </div>
    </div>
    <?php endif; ?>
  </div>
</div>