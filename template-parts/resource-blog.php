<section class="padding-bottom-border">
  <div class="row">
    <div class="col-12">
      <h3>Blog</h3>
    </div>
  </div>

  <?php
  $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 2,
  'post__not_in'  => $args
  );

  $query = new WP_Query($args);

  if($query->have_posts()):

  while($query->have_posts()): $query->the_post(); ?>

  <div class="row mb-3">
    <div class="col-12 col-md-7">
      <?php 
      $default_url = get_template_directory_uri().'/img/blog-default.png';
      $src = !get_the_post_thumbnail_url()?$default_url:get_the_post_thumbnail_url(); 
      ?>
      <img src="<?php echo $src ?>" alt="">
    </div>
    <div class="col-12 col-md-5">
      <div class="blogitem">
        <div class="blog-meta">
        <?php echo get_the_date(); ?> / 
        <?php the_author() ?> / 
        <?php echo comments_number('0' , '1' , 'comments')." ".__('comment' , 'gsc'); ?>
        </div>
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php $content = get_the_content(); ?>
        <p><?php echo wp_trim_words($content , 20); ?></p>
        <a href="<?php the_permalink(); ?>" class="read-more"><?php echo __('Read More' , 'gsc'); ?></a>
      </div>
    </div>
  </div>
    <?php endwhile;
    endif; wp_reset_postdata();
    ?>
  <div class="row my-5">
    <a href="/blog" class="button default"><?php echo __('See All Blog Posts' , 'gsc'); ?></a>
  </div>
</section>