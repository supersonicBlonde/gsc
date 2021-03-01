<?php get_header() ?>
	<main>
		<div>
			<?php
				if(have_posts()):

					while(have_posts()):
						the_post();
			?>
				<div class="intro-section">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="container py-3">
					<?php the_content(); ?>
				</div>

			<?php	
					endwhile;
			
				else:
					echo 'No results';

				endif;
			?>
		</div>
	</main>
<?php get_footer() ?>