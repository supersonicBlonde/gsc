<?php
/**
* Template Name: Pricing
*
* @package gsc
*/

get_header();


?>

	</header>


	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

    <?php while(have_posts()): the_post(); ?>

      <div class="section regular-spacing">
        <div class="container">
          <div class="row text-center w-60 center">
            <div class="col-12">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>

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

      <section id="switcher-container">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-5 main-col">
              <ul class="nav nav-pills justify-content-center">
                <li class="nav-item d-flex align-items-center switcher">
                  <a class="nav-link active" href="#yearly-tab" data-toggle="pill"  role="tab" aria-selected="true">Yearly</a>
                </li>
                <li class="nav-item d-flex align-items-center switcher">
                  <a class="nav-link" href="#monthly-tab" data-toggle="pill"  role="tab" aria-selected="true">Monthly</a>
                </li>
                </ul>
            </div>
          </div>
        </div>
      </section>

      
      <div class="tab-content mb-5" id="myTabContent">
        <?php get_template_part('template-parts/pricing' , 'yearly'); ?>

        <?php get_template_part('template-parts/pricing' , 'monthly'); ?>
      </div>


      <?php get_template_part('template-parts/content' , 'faq'); ?>
    

      <?php endwhile; ?>


    </main>
  
  </div>

  


<?php get_footer(); ?>