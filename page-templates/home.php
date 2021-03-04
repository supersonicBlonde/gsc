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
			<div id="section1" class="section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-5">
								<h3><?php the_sub_field('over_title_home_1'); ?></h2>
								<h2><?php the_sub_field('title_home_1'); ?></h1>
								<h4><?php the_sub_field('sub_title_home_1'); ?></h3>
								<p><?php the_sub_field('paragraph_home_1'); ?></p>
							<div>
								<a href="#"><?php the_sub_field('button_left_home_1_text') ?></a>
								<a href="#"><?php the_sub_field('button_right_text_home_1') ?></a>
							</div>
						</div>
						<div class="col-12 col-md-7"></div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<?php if(have_rows('home_2')): while(have_rows('home_2')): the_row();?> 
			<div id="section2" class="section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
								<h2><?php the_sub_field('title_home_2'); ?></h2>
								<p><?php the_sub_field('paragraph_home_2'); ?></p>
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
								<h2><?php the_sub_field('title'); ?></h2>
								<p><?php the_sub_field('paragraph'); ?></p>
						</div>
					</div>
					<?php if(!empty(the_sub_field('video'))): ?>
					<div class="row">
						<div class="col-12"></div>
					</div>
					<?php endif; ?>
					<div class="row">
						<div class="col-12 col-md-6">
						<h2><?php the_sub_field('title_sub_section'); ?></h2>
						<p><?php the_sub_field('sub_section_paragraph_left'); ?></p>
						</div>
						<div class="col-12 col-md-6">
							<p><?php the_sub_field('sub_section_paragraph_right'); ?></p>
							<?php if(have_rows('list_sub_section_home_3')): ?>
							<ul>
								<?php while(have_rows('list_sub_section_home_3')): the_row();?>
									<li>
										<a href="<?php the_sub_field('link') ?>"><?php the_sub_field('text_link') ?></a>
									</li>
								<?php endwhile; ?>
								</ul>
								<?php else:?>
								
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<?php if(have_rows('home_4')): while(have_rows('home_4')): the_row();?> 
			<div id="section3" class="section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
								<h2><?php the_sub_field('title'); ?></h2>
								<p><?php the_sub_field('paragraph'); ?></p>
						</div>
					</div>
					<?php if(have_rows('steps')): ?>
					<ul>
					<?php while(have_rows('steps')): the_row();?>
					<li>
						<div><?php the_sub_field('instruction') ?></div>
					</li>
					<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<!-- customer stories -->
			<div id="customer_stories">
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
						<div class="row rext-center">
										<div class="col-12">
											<a href="#"><?php echo  __('Read more customer stories' , 'gsc'); ?></a>
										</div>
						</div>
				</div>
			</div>	
			<?php wp_reset_postdata(); ?>


			<?php if(have_rows('section_cta')): while(have_rows('section_cta')): the_row();?> 
			<div id="section_cta" class="section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
								<h2><?php the_sub_field('title'); ?></h2>
								<p><?php the_sub_field('paragraph'); ?></p>
						</div>
					</div>
					<div class="row text-center">
							<div class="col-12">
								<a href="#"><?php the_sub_field('text_button') ?></a>
							</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<?php if(have_rows('section_faq')): while(have_rows('section_faq')): the_row();?> 
			<div id="section_faq" class="section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-6">
								<h2><?php the_sub_field('title'); ?></h2>
								<p><?php the_sub_field('sub_title'); ?></p>
						</div>
						<div class="col-12 col-md-6">
								<p><?php the_sub_field('paragraph'); ?></p>
								<div class="text-center">
								<a href="#"><?php the_sub_field('button_text') ?></a>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>