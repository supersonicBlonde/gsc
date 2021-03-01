<?php

/*
 * Template Name: Page without container
 * description: >-
  Page without fixed width bootstrap container
 */

?>

 <?php get_header() ?>
	<main>
		<?php
			if(have_posts()):

				while(have_posts()):
					the_post();
		?>
			<div class="intro-section">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="py-3">
				<?php the_content(); ?>
			</div>

		<?php	
				endwhile;
		
			else:
				echo 'No results';

			endif;
		?>
	</main>
<?php get_footer() ?>