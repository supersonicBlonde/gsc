<?php

	/*
		
	This is the template for the footer

	@package gsc

	*/
?>

<footer class="quanta-footer mt-5">
	<div class="container-fluid">
		<div class="row align-items-center border-bottom border-top py-4">
			<div class="col-md-2 col-12 text-md-left text-center mb-3 mb-md-0">
			<img src="<?php echo get_template_directory_uri().'/dist/img/shared-contacts-for-gmail-logo.png'; ?>" alt="Logo Share Contacts for Gmail">
			</div>
			<div class="col-lg-2 col-md-4 col-12 mt-3">
				<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
			</div>
			<div class="col-md-6 col-12 mt-3 mt-md-0">
				<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
			</div>
			<div class="col-md-2 col-12 ">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
			</div>
		</div>
		<?php if(have_rows('logos', 'options')): ?>
		<div class="row align-items-center mt-5">
			<div class="col-md-6 col-12 offset-md-3">
				<ul class="logos-footer">
				<?php while(have_rows('logos' , 'options')): the_row(); ?>
					<?php $logo = get_sub_field('logo'); if(!empty($logo)): ?>
						<li><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>"></li>
					<?php endif; endwhile; ?>
				</ul>
			</div>
		</div>
		<?php endif; ?>
	</div>
</footer>
</div><!-- #global-container -->

<?php wp_footer(); ?>
</body>
</html>