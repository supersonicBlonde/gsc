<?php
/**
* Template Name: Contact
*
* @package gsc
*/

get_header();


?>

	</header>

	<div class="primary content-area">

		<main id="main" class="site-main" role="main">

      <?php while(have_posts()): the_post(); ?>

      <div class="section regular-spacing">
        <div class="container">
          <div class="row text-center w-60 center">
            <div class="col-12">
              <h2><?php the_title(); ?></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-6 background-light p-5">
              <form id="form-reseller">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="name" name="name" class="required" required>
                      <label for="name"><?php echo __('Name' , 'gsc'); ?></label>
                    </div>
                    <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="email" name="email" required>
                    <label for="email"><?php echo __('Email' , 'gsc'); ?></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="domain" name="domain" placeholder="<?php echo __('Gsuite domain' , 'gsc'); ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="tel" name="tel" placeholder="<?php echo __('Tel' , 'gsc'); ?>">
                      
                    </div>
                  </div>
                 <div class="form-group">
                  <textarea required id="message" name="message"  class="form-control" rows="5" required></textarea>
                  <label for="message"><?php echo __('Message' , 'gsc'); ?></label>
                </div>
                <div class="text-center my-3">
                  <button type="submit" class="button default"><?php echo __('Submit' , 'gsc'); ?></button>
                </div>
                </form>
          </div>
          <div class="col-6 p-5">
            <div class="infos-container">
              <h2>Our Locations</h2>
              <p>GAPPS EXPERT INC.<br>19 West 34th Street | Suite 1018<br>NEW YORK, NY, 10001<br>UNITED STATES</p>
              <p><strong>Tel Aviv Office</strong><br>Gvahim Accelerator<br>63 Einstein Street<br>Tel Aviv<br>Israel</p>
              <p>If you are a G Suite Reseller, please visit our&nbsp;<a href="https://staging.getsharedcontacts.com/shared-contacts-for-gmail-resellers-program/" target="_blank" rel="noreferrer noopener">Reseller page</a></p>
            </div>
          </div>
        </div>
      </div>

      
      <?php endwhile; ?>

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>