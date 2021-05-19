<?php
$args = array(
  'post_type' => 'customer_stories',
  'posts_per_page' => 4
);

$query  = new WP_Query($args);

if($query->have_posts()): ?>
<section class="padding-top-border">
<div class="row">
  <div class="col-12">
    <h3>Case studies</h3>
  </div>
  <?php $count = 0; while($query->have_posts()): $query->the_post(); ?>
  <div class="col-12 <?php echo $count%2 == 0?'col-md-5':'col-md-7'?> ">
    <div class="story-item">
      <div><?php the_post_thumbnail('thumbnail'); ?></div>
      <h2><?php the_title(); ?></h2>
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
    </div>
  </div>
  <?php $count++; endwhile; wp_reset_postdata(); ?>
</div>
<div class="row my-5">
    <a href="/customer-stories" class="button default"><?php echo __('See all customer stories' , 'gsc'); ?></a>
</div>
<?php endif; ?>

