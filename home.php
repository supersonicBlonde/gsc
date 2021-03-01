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
						<article class="py-3">
							<h2><?php the_title(); ?></h2>
							<div class="row">
								<?php if ( has_post_thumbnail()) : ?>
									<div class="col-3">
										<a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
											<?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded', 'style' => 'height: auto']); ?>
										</a>
									</div>
									<div class="col-9">
										<?php the_excerpt(); ?>
										<p class="text-right">
											<a href="<?php the_permalink() ?>">Read more</a>
										</p>
									</div>
									<?php else: ?>
										<div class="col-12">
											<?php the_excerpt(); ?>
											<p class="text-right">
												<a href="<?php the_permalink() ?>">Read more</a>
											</p>
										</div>
								<?php endif; ?>
							</div>
							
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