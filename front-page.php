<?php get_header() ?>
	<main>
		<div>
			<?php
				if(have_posts()):

					while(have_posts()):
						the_post();
			?>
						<div>
							<?php the_content(); ?>
						</div>

			<?php	endwhile;
			
				else:
					echo 'No results';

				endif;
			?>
		</div>
	</main>
<?php get_footer() ?>