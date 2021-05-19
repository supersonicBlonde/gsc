<?php 
 $count = count(get_sub_field('steps')); 
switch($count) {
  case 1:
    $classw = 'w100';
    break;
  case 2:
    $classw = 'w50';
    break;
  case 3:
    $classw = 'w33';
    break;
  case 4:
    $classw = 'w25';
    break; 
  case 5:
    $classw = 'w20';
    break;
  case 6:
    $classw = 'w16';
    break;
  default:
    $classw = 'w16';
}
?>
<?php if(have_rows('steps')): ?>
<div class="row">
  <div class="col-12">
      <ul class="steps-list d-md-flex justify-content-between">
        <?php $top = 0; $count = 1; while(have_rows('steps')): the_row(); ?>
          <?php 
            if(!empty(get_sub_field('icon'))):
              $icon = get_sub_field('icon');
              $borderbottom = 'border-bottom';
            else:
              $icon = '';
              $borderbottom = '';
            endif;
          ?>
          <li class="position-relative <?php echo $args['offset']; ?> <?php echo $classw ?>">
            <div>		
              <?php if($icon != "" || $args['numbered'] == 1): ?>
                <div class="d-flex align-items-end justify-content-between pb-4 <?php echo $borderbottom; ?>">
                  <?php if($args['numbered'] == 1): ?>
                  <div class="count"><?php echo "0".$count; ?></div>
                  <?php endif; ?>
                  <?php if($icon != ""): ?>
                    <div class='icon'><img src="<?php the_sub_field('icon') ?>"></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <div class="pt-4 instruction"><?php the_sub_field('instruction') ?></div>
              <?php $image = get_sub_field('image'); if(!empty($image)): ?>
              <div class="portrait text-center">
                  <?php if(!empty(get_sub_field('text_link')) && !empty(get_sub_field('link'))): ?>
                    <a href="<?php the_sub_field('text_link') ?>">
                  <?php endif; ?>
                  <img class="non-resp" src="<?php echo $image['sizes']['medium'] ?>" alt="">	
                  <?php if(!empty(get_sub_field('text_link')) && !empty(gt_sub_field('link'))): ?>
                    </a>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if(!empty(get_sub_field('text_link')) && !empty(get_sub_field('link'))): ?>
                <div>
                  <a class="read-more" href="<?php the_sub_field('text_link') ?>"><?php the_sub_field('link'); ?></a>
                </div>
              <?php endif; ?>
              </div>
          </li>
        <?php $top++; $count++; endwhile; ?>
      </ul>
    </div>
</div>
<?php endif; ?>