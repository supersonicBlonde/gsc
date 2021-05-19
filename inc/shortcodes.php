<?php
/**
* Shortcodes
*
* @package gsc
*/

// >> Create Shortcode to Display CTA
 
function gsc_create_shortcode_cta($atts){

    $a = shortcode_atts( array(
      'id' => null
    ), $atts );

    $start = '<div class="cta-item section half-spacing total-half-padding background-dark">';
    $start .= '<div class="container"><div class="row align-items-center">';
    $end = '</div></div></div>';

 
    $args = array(
      'post_type'      => 'gsc_cta',
      'p' => $a['id'],
      'publish_status' => 'published',
    );
 
    $query = new WP_Query($args);
 
    if($query->have_posts()) :

 
        while($query->have_posts()) :
 
            $query->the_post() ;
                     
        $result  = '<div class="col-12 col-md-6">';
        $result .= '<div class="cta-title">' . get_field('title') . '</div>';
        $result .= '<div class="cta-sub-title mt-3">' . get_field('sub_title') . '</div>';
        $result .= '</div>';
        $result .= '<div class="col-12 col-md-6">';
        $result .= '<div class=""><a class="button default" href=" '. get_field('link_button') .' ">' . get_field('text_button') . '</a></div>'; 
        $result .= '</div>';
 
        endwhile;
 
        wp_reset_postdata();
 
    endif;    
 
    return $start.$result.$end;            
}
 
add_shortcode( 'block-cta', 'gsc_create_shortcode_cta' ); 
 
// shortcode code ends here
