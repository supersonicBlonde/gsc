<?php if(have_rows('steps')): ?>
<?php $offset = (empty(get_sub_field('offset')) || get_sub_field('offset') == 0) ?1:1.5; ?>
<div class="row">
  <div class="col-12 col-xl-10">
      <ul class="steps-list d-md-flex justify-content-between">
        <?php $top = 0; $count = 1; while(have_rows('steps')): the_row(); $pos = $top*$offset;?>
          <li class="position-relative" style="margin-top:<?php //echo $pos.'em'; ?>;">
            <div>		
              <div class="d-flex border-bottom align-items-end justify-content-between pb-4">
                <div class="count"><?php echo "0".$count; ?></div>
                <div class='icon'><img src="<?php the_sub_field('icon') ?>"></div>
              </div>
              <div class="pt-4 instruction"><?php the_sub_field('instruction') ?></div>
              <?php $image = get_sub_field('image'); if(!empty($image)): ?>
              <div class="position-absolute portrait text-center">
                  <img class="non-resp" src="<?php echo $image['sizes']['medium'] ?>" alt="">	
                </div>
              <?php endif; ?>
              </div>
          </li>
        <?php $top++; $count++; endwhile; ?>
      </ul>
    </div>
</div>
<?php endif; ?>