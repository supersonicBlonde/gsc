<?php get_header() ?>
	<main>
		<div class="container py-3">
			<div class="row">
				<div class="col-md-8">
					<?php
						if(have_posts()):

							while(have_posts()):
								the_post();
					?>
						<article class="py-3 border-bottom">
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
							<p class="text-right">
								<a href="<?php the_permalink() ?>">Read more</a>
							</p>
						</article>

					<?php	
							endwhile;
					
						else:
							echo 'No results';

						endif;
					?>
				</div>
				<div class="col-md-4">
					<aside class="py-3">
						<?php dynamic_sidebar('blog-aside'); ?>
					</aside>
				</div>
			</div>
			
		</div>
	</main>
<?php get_footer() ?>