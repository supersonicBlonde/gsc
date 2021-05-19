<div id="section3" class="background-light section regular-spacing regular-padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3><?php the_sub_field('title'); ?></h3>
              <h2><?php the_sub_field('paragraph'); ?></h2>
            </div>
          </div>
          <?php if(!empty(get_sub_field('video'))): ?>
          <div class="row">
            <div class="col-12 col-md-9">
            <div class="embed-responsive embed-responsive-16by9 shadowed">
              <?php the_sub_field('video'); ?>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <div class="row mt-5">
            <div class="col-12 col-md-6 col-xl-5">
              <h2><?php the_sub_field('title_sub_section'); ?></h2>
              <p><?php the_sub_field('sub_section_paragraph_left'); ?></p>
            </div>
            <div class="col-12 col-md-6 col-xl-5">
              <p><?php the_sub_field('sub_section_paragraph_right'); ?></p>
              <?php if(have_rows('list_sub_section_home_3')): ?>
              <ul class="link-list arrow-bullets">
              <?php while(have_rows('list_sub_section_home_3')): the_row();?>
              <li>
              <a href="<?php the_sub_field('link') ?>" class="read-more"><?php the_sub_field('text_link') ?></a>
              </li>
              <?php endwhile; ?>
              </ul>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>