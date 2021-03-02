<?php
/**
* 
*
* @package purnatur
*/

function purnatur_get_categories_by_id($id) {

	$cat = wp_get_post_categories( $id);
	
	$cats = array();

	$html = '<div class="cat-container"><ul>';
	foreach($cat as $c){
	    $cat = get_category( $c );
	    //$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
	    $html .= '<li class="mx-1"><a href="/category/'.$cat->slug.'" class="bgaccent py-1 px-3">'.$cat->name.'</a></li>';
	}

	$html .= '</ul></div>';

	return $html;
}

/*function purnatur_list_thumb_products($nb_posts) {

	$args = array(
		
		'post_type'    => 'product',
		'post_status' => 'publish',
		'posts_per_page' => $nb_posts,
	);

	
	$query = new WP_Query( $args );

	if($query->have_posts()):

		$html = '<ol class="carousel-indicators d-flex list-none">';

		while($query->have_posts()): $query->the_post(); $count = 0;

			$html .= '<li data-target="#carousel-products" data-slide-to="<?php echo $count; ?>" class="active" class="mx-1"><a href="'.get_the_permalink().'">'.get_the_post_thumbnail($query->post_id , array(38, 38) , array('class' => 'round')).'</a></li>';
		
		$count++; endwhile;

		$html .= '</ol>';
	else:
		return;
	endif;

	return $html;
	
}*/

function purnatur_list_thumb_products($ar) {

	

		$html = '<ol class="carousel-indicators list-none">';

		for($i = 0 ; $i < count($ar) ; $i++):
			$active = $i == 0?'active':'';
			$html .= '<li data-target="#carouselProducts" data-slide-to="'.$i.'"  class="'.$active.'">'.get_the_post_thumbnail($ar[$i] , array(38, 38) , array('class' => 'round noresp')).'</li>';
		
		endfor;

		$html .= '</ol>';

	return $html;
	
}

