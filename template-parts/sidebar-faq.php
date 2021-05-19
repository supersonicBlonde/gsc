<?php

$args = array(
  'post_type' => 'faq',
  'posts_per_page' => 7
);

$query = new WP_Query($args);

if($query->have_posts()):
?>
<div class="sidebar" id="sidebar-faq">
  <h3>FAQ</h3>
  <ul>
  <?php while($query->have_posts()): $query->the_post(); ?>
      <li class="border-bottom py-3">
        <div class='question mb-2'><?php the_title(); ?></div>
        <div><a href="<?php the_permalink(); ?>" class="read-more"><?php echo __('Read more' , 'gsc'); ?></a></div>
      </li>
  <?php endwhile ?>
  </ul>
  <div class="my-5">
    <a href="/welcome-to-our-faq" class="button default"><?php echo __("See all Faq's" , 'gsc'); ?></a>
  </div>
</div>
<?php endif; ?>