<?php
/**
* Template Name: Search Page
*
* @package gsc
*/

get_header();

global $wp_query;
$total_results = $wp_query->found_posts;
global $query_string;
$query_args = explode("&amp;", $query_string);
$search_query = array();
foreach($query_args as $key => $string) {
  echo 'key: '.$key.'  value: '.$string;
  /* $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]); */
}


?>

	</header>

	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

      <div class="section regular-spacing">
        <div class="container">
          <div class="row text-center w-60 center">
            <div class="col-12">
              <h2><?php the_title(); ?></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="background-light section regular-padding">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-5">
              <div class="bold mb-3">Search for content using content tags:</div>
              <p class="semi-bold">how to get started google workspace CRM administrator contact sharing contacts API editing permission gmail contacts google sharing contacts sharing groups</p>
            </div>
            <div class="col-12 col-md-5 offset-md-1">
              <div class="bold mb-3">Type your question here.</div>
              <div>
                <p><input type="text" placeholder="<?php echo __('Type your questions');?> "></p>
                <p><button type="submit">Search</button></p>
              </div>
            </div>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div><?php echo __('Search results' , 'gsc'); ?></div>
            <div>
              <?php 
                echo __('We found ' , 'gsc');
                echo $total_results; 
                echo __(' pages with the keyword' , 'gsc'); 
                echo '<strong>CRM</strong>';
                ?>
                </div>
            </div>
        </div>
        
      </div>


		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>