<?php
/**
* Ajax functions
*
* @package gsc

*/
add_action('wp_ajax_loadmore', 'quanta_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'quanta_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function quanta_loadmore_ajax_handler(){
 
	$posts_per_page = (isset($_POST["posts_per_page"])) ? $_POST["posts_per_page"] : 9;
  $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;

  header("Content-Type: text/html");

  $args = array(
      'post_type' => 'customer_stories',
      'posts_per_page' => $posts_per_page,
      'paged'    => $page,
  );

  $loop = new WP_Query($args);

  $out = '';

  if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
      $out .= '<div class="col-12 col-md-4"><div class="story-item">';
      $out .= '<div><img src="'.get_the_post_thumbnail_url(get_the_ID() , "thumbnail").'"></div>';
      $out .= '<h2>'.get_the_title().'</h2>';
      $out .= '<p>'.get_the_excerpt().'</p>';
      $out .= '<a href="'.get_the_permalink().'" class="read-more">'.__("Read More" , "gsc").'</a>';
      $out .= '</div></div>';


  endwhile;
  endif;
  wp_reset_postdata();
  die($out);

	die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmoreposts', 'quanta_loadmoreposts_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmoreposts', 'quanta_loadmoreposts_ajax_handler'); // wp_ajax_nopriv_{action}

function quanta_loadmoreposts_ajax_handler(){
 
	$posts_per_page = (isset($_POST["posts_per_page"])) ? $_POST["posts_per_page"] : 8;
  $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;

  header("Content-Type: text/html");

  $args = array(
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'paged'    => $page,
  );

  $loop = new WP_Query($args);

  $out = '';

  if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
      $out .= '<div class="col-12 col-md-6"><div class="blog-item">';
      $default_url = get_template_directory_uri().'/img/blog-default.png';
      $src = !get_the_post_thumbnail_url()?$default_url:get_the_post_thumbnail_url(); 
      $out .= '<div><img src="'.$src.'" alt=""></div>';
      $out .= '<h2>'.get_the_title().'</h2>';
      $out .= '<p>'.get_the_excerpt().'</p>';
      $out .= '<a href="'.get_the_permalink().'" class="read-more">'.__("Read More" , "gsc").'</a>';
      $out .= '</div></div>';


  endwhile;
  endif;
  wp_reset_postdata();
  die($out);

	die; 
}

add_action('wp_ajax_loadmorefaqs', 'quanta_loadmorefaqs_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmorefaqs', 'quanta_loadmorefaqs_ajax_handler'); // wp_ajax_nopriv_{action}

function quanta_loadmorefaqs_ajax_handler(){
 
	$posts_per_page = (isset($_POST["posts_per_page"])) ? $_POST["posts_per_page"] : 8;
  $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;

  header("Content-Type: text/html");

  $args = array(
      'post_type' => 'faq',
      'posts_per_page' => $posts_per_page,
      'paged'    => $page,
  );

  $loop = new WP_Query($args);

  $out = '';

  if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
      $out .= '<div class="col-12 col-md-6"><div class="blog-item mb-5">';
      $default_url = get_template_directory_uri().'/img/blog-default.png';
      $src = !get_the_post_thumbnail_url()?$default_url:get_the_post_thumbnail_url(); 
      $out .= '<div><img src="'.$src.'" alt=""></div>';
      $out .= '<div class="blog-meta my-2">'.get_the_date().' / '.get_the_author().'</div>';
      $out .= '<h2 class="entry-title">'.get_the_title().'</h2>';
      $out .= '<p>'.get_the_excerpt().'</p>';
      $out .= '<a href="'.get_the_permalink().'" class="button default">'.__("Read More" , "gsc").'</a>';
      $out .= '</div></div>';


  endwhile;
  endif;
  wp_reset_postdata();
  die($out);

	die; 
}


//**************************************** */
// LOADS THE NEXT FORM
//****************************************** */
add_action( 'wp_ajax_nopriv_search_faq', 'search_faq' );
add_action( 'wp_ajax_search_faq', 'search_faq' ); 


function search_faq() {

  if ( ! wp_verify_nonce( $_POST['nonce'], 'submission_nonce' ) ) {
    returnJson(
      array(
       'error'  =>  'nonce',
      )
    ); 
  } 

  $s = $_POST['s'];

  $search = new WP_Query(
    array(
    'post_type' => 'faq',
    's' => $s
    )
    );
    $res = [];
    $res['query'] = $s;
    $res['posts'] = array();
    while($search->have_posts()): $search->the_post();
      $res['posts'][] = array(
        'title' => get_the_title(),
        'thumbnail' => get_the_post_thumbnail_url(),
        'author'  => get_the_author(),
        'date'  => get_the_date(),
        'excerpt' => get_the_excerpt()
      );
    endwhile;


  ob_start();
  get_template_part('template-parts/result', 'faq' , $res);
  wp_send_json_success(ob_get_clean()); 
  wp_die();
}
 

