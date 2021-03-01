<?php get_header() ?>
	<main class="mt-3">
		<div class="container">
			<?php
				if(have_posts()):

					while(have_posts()):
						the_post();
			?>
						<div class="row">
							<div class="col-md-12">	
								<h1><?php the_title(); ?></h1>
								<p>
									<?php the_excerpt(); ?>
								</p>
							</div>
						</div>

			<?php	endwhile;
			
				else:
					echo 'No results';

				endif;
			?>
		</div>
	</main>
<?php get_footer() ?>