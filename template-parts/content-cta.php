<?php if(have_rows('section_cta' , 'option')): while(have_rows('section_cta' , 'option')): the_row();?>
<div id="section_cta" class="section background-dark text-center regular-padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-4 col-12">
          <h2><?php the_sub_field('cta_heading' , 'option'); ?></h2>
          <p><?php the_sub_field('cta_paragraph' , 'option'); ?></p>
      </div>
      <div class="col"></div>
    </div>
    <div class="row text-center mt-3">
        <div class="col-12">
          <a href="<?php the_sub_field('link_button' , 'option') ?>" class="button default"><?php the_sub_field('cta_heading' , 'option') ?></a>
        </div>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>