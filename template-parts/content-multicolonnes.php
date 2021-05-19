<div id="section4" class="section double-top-spacing">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3><?php the_sub_field('title'); ?></h3>
        <h2><?php the_sub_field('paragraph'); ?></h2>
      </div>
    </div>
    <?php $offset = (empty(get_sub_field('offset')) || get_sub_field('offset') == 0) ?'':'offset'; ?>
    <?php $numbered = (empty(get_sub_field('offset')) || get_sub_field('offset') == 0) ?'':'offset'; ?>
    <?php get_template_part('template-parts/content' , 'steps'); ?>
  </div>
</div>
