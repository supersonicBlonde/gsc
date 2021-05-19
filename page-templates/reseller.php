<?php
/**
* Template Name: Reseller
*
* @package gsc
*/

get_header();


?>

	</header>

	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

      <?php while(have_posts()): the_post(); ?>

        <section class="text-center section half-spacing">

        <div class="container">

        <div class="row">

        <div class="col"></div>

        <div class="col-8">

          <h1><?php the_field('title'); ?></h1>

          <p><?php the_field('heading_paragraph'); ?></p>

        </div>

        <div class="col"></div>

        </div>

        </div>
        
        </section>

        <div class="section half-padding background-light">
          <div class="container">
            <div class="row">
              <div class="col"></div>
              <div class="col-8">
                <form id="form-reseller">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="first_name" name="first_name" class="required" required>
                      <label for="first_name"><?php echo __('First Name' , 'gsc'); ?></label>
                    </div>
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                    <label for="last_name"><?php echo __('Last Name' , 'gsc'); ?></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="email" class="form-control" id="email" name="email" required>
                      <label for="email"><?php echo __('Email' , 'gsc'); ?></label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="company" name="company" required>
                      <label for="company"><?php echo __('Company' , 'gsc'); ?></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="workspace" name="workspace" required>
                      <label for="workspace"><?php echo __('Google Workspace Domain' , 'gsc'); ?></label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="tel" name="tel" required>
                      <label for="workspace"><?php echo __('Telephone number' , 'gsc'); ?></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="street" name="street" required>
                      <label for="street"><?php echo __('Street Address' , 'gsc'); ?></label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="city" name="city" required>
                      <label for="city"><?php echo __('City' , 'gsc'); ?></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="state" name="state" required>
                      <label for="state"><?php echo __('State' , 'gsc'); ?></label>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="zip" name="zip" required>
                      <label for="zip"><?php echo __('Zip' , 'gsc'); ?></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="country" name="country" required>
                      <label for="country" class="label-top"><?php echo __('Country' , 'gsc'); ?></label>
                    </div>
                    <div class="form-group col-md-6">
                      <textarea required id="message" name="message"  class="form-control" rows="5" required></textarea>
                      <label for="message"><?php echo __('Message' , 'gsc'); ?></label>
                    </div>
                  </div>
                  <div class="text-center my-3">
                    <button type="submit" class="button default"><?php echo __('Submit' , 'gsc'); ?></button>
                  </div>
                </form>
                </div>
              <div class="col"></div>
            </div>
          </div>
        </div>

        <?php if(have_rows('sub_fom_section')): ?>
        <section>
          <?php while(have_rows('sub_fom_section')): the_row(); ?>
            <div class="section regular-spacing">
              <div class="container">
                <div class="row">
                  <div class="col"></div>
                  <div class="col-8">
                    <div class="heading"><?php the_sub_field('heading_paragraph') ?></div>
                    </div>
                  <div class="col"></div>
                </div>
              </div>
            </div>
              <?php if(have_rows('icons')): ?>
              <div class="section half-spacing">
                <div class="container">
                  <div class="row">
                    <?php while(have_rows('icons')): the_row(); ?>
                      <div class="icon-item col-md-4 text-center">
                        <div class="icon mb-4"><img src="<?php the_sub_field('icon'); ?>"></div>
                        <div class="text"><?php the_sub_field('text'); ?></div>
                      </div>
                    <?php endwhile; ?>
                  </div>
              <?php endif; ?>
              <div class="row">
                <div class="col-12 text-center my-5">
                    <a href="#" class="button default"><?php the_sub_field("text_button"); ?></a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </section>
        <?php endif; ?>

        <section class="section half-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-5 heading"><?php the_field('left_text'); ?></div>
              <div class="col"></div>
              <div class="col-md-5"><?php the_field('right_paragraph'); ?></div>
            </div>
          </div>
        </section>

        <?php if(have_rows('lists')): ?>
          <section class="section regular-padding" id="reseller-list">
            <div class="container">
              <div class="row">
                <?php while(have_rows('lists')): the_row(); ?>
                  <div class="col-12 col-md-6 col">
                    <div class="heading"><?php the_sub_field('title'); ?></div>
                    <?php if(have_rows('list')): ?>
                      <ul>
                        <?php 
                        while( have_rows('list') ): the_row();
                          ?>
                          <li><?php the_sub_field('list_item'); ?></li>
                        <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </section>
        <?php endif; ?>

      <?php endwhile; ?>

      <?php get_template_part("template-parts/content" , "cta"); ?>

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>