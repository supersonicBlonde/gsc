<?php
/**
* Template Name: Home
*
* @package gsc
*/

get_header();


?>

	</header>


	<div class="primary" class="content-area">

		<main id="main" class="site-main" role="main">

		<?php if(have_rows('home_1')): while(have_rows('home_1')): the_row();?> 
			<?php $img = get_sub_field('image');?>
			<div id="section1" class="section">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 col-md-5">
								<h1><?php the_sub_field('over_title_home_1'); ?></h1>
								<h2 class="intro-title"><?php the_sub_field('title_home_1'); ?></h2>
								<h4><?php the_sub_field('sub_title_home_1'); ?></h3>
								<p><?php the_sub_field('paragraph_home_1'); ?></p>
							<div>
								<a href="#" class="button default"><?php the_sub_field('button_left_home_1_text') ?></a>
								<a href="#" class="button invert"><?php the_sub_field('button_right_text_home_1') ?></a>
							</div>
						</div>
						<div class="col-12 col-md-7 text-center">
								<!-- <div style=background-image:url(<?php echo $img['url']; ?>)></div> -->
							<?php	
							$size = 'large'; 
								if( $img ) {
										echo wp_get_attachment_image( $img, $size );
								}
						 ?>

						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<?php if(have_rows('home_2')): while(have_rows('home_2')): the_row();?> 
			<div id="section2" class="section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
								<h3><?php the_sub_field('title_home_2'); ?></h3>
								<h2><?php the_sub_field('paragraph_home_2'); ?></h2>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<?php if(have_rows('home_3')): while(have_rows('home_3')): the_row();?> 
			<div id="section3" class="section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h3><?php the_sub_field('title'); ?></h3>
										<h2><?php the_sub_field('paragraph'); ?></h2>
									</div>
								</div>
								<?php if(!empty(get_sub_field('video'))): ?>
								<div class="row">
									<div class="col-12 col-md-9">
										<div class="embed-container shadowed">
										<?php the_sub_field('video'); ?>
										</div>
									</div>
								</div>
								<?php endif; ?>
								<div class="row">
									<div class="col-12 col-md-6">
										<h3><?php the_sub_field('title_sub_section'); ?></h3>
										<p class="lh-2x"><?php the_sub_field('sub_section_paragraph_left'); ?></p>
									</div>
									<div class="col-12 col-md-6">
										<p><?php the_sub_field('sub_section_paragraph_right'); ?></p>
										<?php if(have_rows('list_sub_section_home_3')): ?>
										<ul class="link-list">
										<?php while(have_rows('list_sub_section_home_3')): the_row();?>
										<li class="mb-3">
										<a href="<?php the_sub_field('link') ?>"><?php the_sub_field('text_link') ?></a>
										</li>
										<?php endwhile; ?>
										</ul>
									<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

					<?php if(have_rows('home_4')): while(have_rows('home_4')): the_row();?> 
					<div id="section4" class="section">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<h3><?php the_sub_field('title'); ?></h3>
									<h2><?php the_sub_field('paragraph'); ?></h2>
								</div>
							</div>
							<?php if(have_rows('steps')): ?>
							<div class="row">
								<div class="col-12 col-md-10">
										<ul class="steps-list d-md-flex justify-content-between">
											<?php $top = 0; $count = 1; while(have_rows('steps')): the_row(); $pos = $top*1.5;?>
												<li class="position-relative" style="margin-top:<?php echo $pos.'em'; ?>;">
													<div>		
														<div class="d-flex border-bottom align-items-end justify-content-between pb-4">
															<div class="count"><?php echo "0".$count; ?></div>
															<div class='icon'><img src="<?php the_sub_field('icon') ?>"></div>
														</div>
														<div class="pt-4 instruction"><?php the_sub_field('instruction') ?></div>
														<?php $image = get_sub_field('image'); if(!empty($image)): ?>
														<div class="position-absolute portrait text-center">
																<img class="non-resp" src="<?php echo $image['sizes']['medium'] ?>" alt="">	
															</div>
														<?php endif; ?>
														</div>
												</li>
											<?php $top++; $count++; endwhile; ?>
										</ul>
									</div>
							</div>
							<?php endif; ?>
						</div>
					</div>

			<?php endwhile; endif; ?>

			<!-- customer stories -->
			<div id="customer_stories">
						<?php if(have_rows('section_customer_stories')): ?>
							<div class="container-fluid">
								<div class="row">
									<?php while(have_rows('section_customer_stories')): the_row(); ?>
									<div class="col-12 col-md-6">
										<h3><?php the_sub_field('h3'); ?></h3>
										<h2><?php the_sub_field('h2'); ?></h2>
									</div>
									<div class="col-12 col-md-6">
										<div class="user-number">
											<?php the_sub_field('user_number'); ?>
										</div>
									</div>
									<?php endwhile; ?>
								</div>
							</div>
							<?php endif; ?>
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
									<?php 
									$args = array(
										'post_type' => 'customer_stories',
										'posts_oer_page' => -1,
										'post_status' => 'publish'
									);

									$query = new WP_Query($args);
									if($query->have_posts()): ?>

									<ul>

									<?php while($query->have_posts()): $query->the_post(); ?>

									<li>
									<div><?php the_field('story') ?></div>
									<div><?php the_field('customer_name') ?></div>
									</li>
									
									<?php endwhile; ?>
									
									</ul>

									<?php endif; ?>
								</div>
						</div>
						<div class="row text-center">
								<div class="col-12">
									<a href="#" class="button default"><?php echo  __('Read more customer stories' , 'gsc'); ?></a>
								</div>
						</div>
				</div>
			</div>	
			<?php wp_reset_postdata(); ?>


			<?php if(have_rows('section_cta')): while(have_rows('section_cta')): the_row();?> 
			<div id="section_cta" class="section background-dark text-center">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
								<h2><?php the_sub_field('title'); ?></h2>
								<p><?php the_sub_field('paragraph'); ?></p>
						</div>
					</div>
					<div class="row text-center">
							<div class="col-12">
								<a href="#" class="button default"><?php the_sub_field('text_button') ?></a>
							</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<?php if(have_rows('section_faq')): while(have_rows('section_faq')): the_row();?> 
			<div id="section_faq" class="section">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 col-md-6">
								<h3><?php the_sub_field('title'); ?></h3>
								<h2><?php the_sub_field('sub_title'); ?></h2>
						</div>
						<div class="col-12 col-md-6">
								<p><?php the_sub_field('paragraph'); ?></p>
								<div class="text-center">
								<a href="#" class="button default"><?php the_sub_field('button_text') ?></a>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>