<?php 
  $args = array(
    'post_type' => 'pricing',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'meta_value'  => 'yearly'
  );

  $pricing_ar = [];

  $query = new WP_Query($args);
  if($query->have_posts()):
    $count = 0;
    while($query->have_posts()): $query->the_post();
      $pricing_ar[$count]['name'] = get_field('name');
      $pricing_ar[$count]['color'] = get_field('color');
      $pricing_ar[$count]['price'] = get_field('price');
      $pricing_ar[$count]['description'] = get_field('description');
      $pricing_ar[$count]['text_button'] = get_field('text_button');
      $pricing_ar[$count]['shared_text'] = get_field('shared_text');
      $pricing_ar[$count]['featured'] = get_field_object('featured');
      $count++;
    endwhile; endif;
    
    //get all features
    $featured_label = [];
    foreach ($pricing_ar[0]['featured']['choices'] as $choice_value => $choice_label) {
      $featured_label[] = $choice_label;
    }
?>

<div class="plan-container tab-pane fade show active" id="yearly-tab" role="tabpanel">
  <!-- <div class="pastille">
    What's Google Workspace Bundle?
  </div> -->
  <div class="buy-comparison container">
    <div class="buy-compare-col col-title">
      <div class="bc-body">
        <div class="bc-row bc-title text-center">
          <img src="<?php echo get_template_directory_uri()?>/img/shared-contacts-for-gmail-logo.svg" alt="">
        </div>
        <div class="bc-row featured">
          <div>Shared contacts and contact groups</div>
        </div>
        <?php
        foreach($featured_label as $feature):
        ?>
          <div class="bc-row featured">
            <div><?php echo $feature; ?></div>
          </div>
        <?php endforeach; ?>
        <div class="bc-row">
          <div></div>
        </div>
      </div>
    </div>
    <?php foreach($pricing_ar as $plan): ?>
      <div class="buy-compare-col">
        <header class="bc-header">
          <div class="bc-header_body">
          <div class="bc-header__title" style="background-color:<?php echo $plan['color']; ?>"><?php echo $plan['name']; ?></div>
          <div class="bc-header__price"><?php echo $plan['price']; ?></div>
          <div class="bc-header__desc"><?php echo $plan['description']; ?></div>
          <div class="bc-header__action">
            <div>
            <a href="#" class="button default"><?php echo $plan['text_button']; ?></a>
            </div>
          </div>
          </div
        </header>
      <div class="bc-body">
        <div class="bc-row featured px-3"><div><?php echo $plan['shared_text']; ?></div></div>     
        <?php for($i = 0 ; $i < count($featured_label) ; $i++): ?>
        <div class="bc-row">
            <?php $class = isset($plan['featured']['value'][$i])?'available':'not_available'; ?>
          <div class='<?php echo $class; ?>'>
            <?php if($class == "available"): ?>
            <i class="gsc-icons gsc-check"></i></span>
            <?php endif; ?>
          </div>
        </div>
        <?php endfor;  ?>
        <div class="bc-row white"><a href="#" class="button default"><?php echo $plan['text_button']; ?></a></div>
      </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>