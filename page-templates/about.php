<?php
/**
* Template Name: About
*
* @package gsc
*/

get_header();



?>

	</header>

	<div class="primary content-area">


		<main id="main" class="site-main" role="main">

      <?php if(have_rows('header')): ?>
        <?php while(have_rows('header')): the_row(); ?>
          <div class="header d-flex justify-content-center align-items-center background-image" style="height: 45vh; background:url(<?php the_sub_field('background'); ?>)">
          <div class="heading-text">
            <h1><?php the_sub_field('heading_text'); ?></h1>
          </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <div id="about-us" class="section regular-spacing">
        <div class="container">
          <div class="row">
            <div class="col">

           Nam risus sapien, tincidunt et lacus nec, aliquet luctus mi. Phasellus quis malesuada urna. Nulla vitae feugiat nibh. Duis a imperdiet lorem, non pharetra neque. Sed lacinia leo at facilisis imperdiet. Maecenas laoreet felis et nunc faucibus, pretium pretium nisi ornare. Praesent justo risus, volutpat eu maximus sit amet, tincidunt et est. Aliquam non augue lectus. Duis id finibus ipsum, eget lacinia quam. Donec dapibus feugiat diam ut porttitor. Praesent quis ipsum porttitor, maximus felis et, imperdiet mauris.

            Cras convallis sapien quam, congue tristique odio aliquet eget. Proin eget vulputate elit. Pellentesque fermentum, ipsum vel elementum lacinia, ante risus vehicula urna, non varius mi libero eu diam. Donec suscipit velit non iaculis tincidunt. Donec cursus nisi in lacus rhoncus, nec imperdiet odio porta. Sed hendrerit, dolor quis finibus dignissim, mauris tortor vehicula nibh, ut venenatis lectus risus eu risus. Morbi a massa ac ligula egestas viverra. Aliquam pulvinar tempus luctus. Phasellus nec erat sed orci ultricies consequat. Cras congue tellus vel imperdiet fermentum. Quisque lorem massa, volutpat in massa tincidunt, bibendum tempus tellus.
          
            Nam risus sapien, tincidunt et lacus nec, aliquet luctus mi. Phasellus quis malesuada urna. Nulla vitae feugiat nibh. Duis a imperdiet lorem, non pharetra neque. Sed lacinia leo at facilisis imperdiet. Maecenas laoreet felis et nunc faucibus, pretium pretium nisi ornare. Praesent justo risus, volutpat eu maximus sit amet, tincidunt et est. Aliquam non augue lectus. Duis id finibus ipsum, eget lacinia quam. Donec dapibus feugiat diam ut porttitor. Praesent quis ipsum porttitor, maximus felis et, imperdiet mauris.

            Cras convallis sapien quam, congue tristique odio aliquet eget. Proin eget vulputate elit. Pellentesque fermentum, ipsum vel elementum lacinia, ante risus vehicula urna, non varius mi libero eu diam. Donec suscipit velit non iaculis tincidunt. Donec cursus nisi in lacus rhoncus, nec imperdiet odio porta. Sed hendrerit, dolor quis finibus dignissim, mauris tortor vehicula nibh, ut venenatis lectus risus eu risus. Morbi a massa ac ligula egestas viverra. Aliquam pulvinar tempus luctus. Phasellus nec erat sed orci ultricies consequat. Cras congue tellus vel imperdiet fermentum. Quisque lorem massa, volutpat in massa tincidunt, bibendum tempus tellus.
            </div>
          </div>
        </div>
      </div>


      <div id="about-story" class="section regular-spacing">
      <div class="container">
        <div class="row">
          <div class="col text-center">
          <h2>Our story</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-10 offset-1">
            
            <div id="story-slider">
              <div class="slide">
                <div class="text-center slide-icon"><i class="fab fa-accusoft"></i></div>
                <div class="title text-center my-3">Title</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet luctus ornare. Nam sed vulputate massa, eu hendrerit orci.</p>
              </div>
              <div class="slide">
                <div class="text-center slide-icon"><i class="fab fa-accusoft"></i></div>
                <div class="title text-center my-3">Title</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet luctus ornare. Nam sed vulputate massa, eu hendrerit orci. </p>
              </div>
              <div class="slide">
                <div class="text-center slide-icon"><i class="fab fa-accusoft"></i></div>
                <div class="title text-center my-3">Title</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet luctus ornare. Nam sed vulputate massa, eu hendrerit orci. Morbi id nulla eu magna vulputate tristique sed sed purus. Nam tempus sollicitudin lectus et scelerisque. </p>
              </div>
              <div class="slide">
                <div class="text-center slide-icon"><i class="fab fa-accusoft"></i></div>
                <div class="title text-center my-3">Title</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet luctus ornare. Nam sed vulputate massa, eu hendrerit orci. Morbi id nulla eu magna vulputate tristique sed sed purus. Nam tempus sollicitudin lectus et scelerisque. </p>
              </div>
          </div>
        </div>
      </div>
      </div>

      <section class="section" id="counterup">
        <div class="container">
          <div class="row">
            <h2 class="col-12 text-center">Heading counter</h2>
          </div>
          <div class="row">
            <div class="col-3 col">
              <div><img src="" alt=""></div>
              <div><div class="counter">2176</div> text</div>
            </div>
            <div class="col-3 col">
              <div><img src="" alt=""></div>
              <div><div class="counter">847</div> text </div>
            </div>
            <div class="col-3 col">
              <div><img src="" alt=""></div>
              <div><div class="counter">94</div> text</div>
            </div>
            <div class="col-3 col">
              <div><img src="" alt=""></div>
              <div><div class="counter">75</div> text</div>
            </div>
          </div>
        </div>     
      </section>

      <section id="locations" class="section regular-spacing">
        <div class="container">
          <div class="row">
            <h2 class="col-12 text-center">Locations</h2>
          </div>
          <div class="row">
            <div class="col">
              <div class="location-icon text-center"><i class="fab fa-periscope"></i></div>
              <div class="location-text text-center">Paris</div>
            </div>
            <div class="col">
              <div class="location-icon text-center"><i class="fas fa-rainbow"></i></div>
              <div class="location-text text-center">Paris</div>
            </div>
            <div class="col">
              <div class="location-icon text-center"><i class="fab fa-periscope"></i></div>
              <div class="location-text text-center">Paris</div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="location-icon text-center"><i class="fas fa-rainbow"></i></div>
              <div class="location-text text-center">Paris</div>
            </div>
            <div class="col">
              <div class="location-icon text-center"><i class="fab fa-periscope"></i></div>
              <div class="location-text text-center">Paris</div>
            </div>
            <div class="col">
              <div class="location-icon text-center"><i class="fas fa-rainbow"></i></div>
              <div class="location-text text-center">Paris</div>
            </div>
          </div>
         </div>
      </section>

      <section id="team" class="section regular-spacing">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2>Get to know us Better</h2>
            </div>
          </div>
        </div>
        <div class="container">
          <div id="team-slider">
            <div class="tem-item">
              <div class="team-face"></div>
              <p class="team-story">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sollicitudin augue, bibendum facilisis quam. Duis posuere tincidunt odio condimentum hendrerit. Pellentesque faucibus quam et.
                <span class="team-name">"Lulu Larue"</span>
              </p>
            </div>
            <div class="tem-item">
              <div class="team-face"></div>
              <p class="team-story">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sollicitudin augue, bibendum facilisis quam. Duis posuere tincidunt odio condimentum hendrerit. Pellentesque faucibus quam et.
                <span class="team-name">"Lulu Larue"</span>
              </p>
            </div>
            <div class="tem-item">
              <div class="team-face"></div>
              <p class="team-story">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sollicitudin augue, bibendum facilisis quam. Duis posuere tincidunt odio condimentum hendrerit. Pellentesque faucibus quam et.
                <span class="team-name">"Lulu Larue"</span>
              </p>
            </div>
            <div class="tem-item">
              <div class="team-face"></div>
              <p class="team-story">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sollicitudin augue, bibendum facilisis quam. Duis posuere tincidunt odio condimentum hendrerit. Pellentesque faucibus quam et.
                <span class="team-name">"Lulu Larue"</span>
              </p>
            </div>
            <div class="tem-item">
              <div class="team-face"></div>
              <p class="team-story">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sollicitudin augue, bibendum facilisis quam. Duis posuere tincidunt odio condimentum hendrerit. Pellentesque faucibus quam et.
                <span class="team-name">"Lulu Larue"</span>
              </p>
            </div>
            <div class="tem-item">
              <div class="team-face"></div>
              <p class="team-story">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sollicitudin augue, bibendum facilisis quam. Duis posuere tincidunt odio condimentum hendrerit. Pellentesque faucibus quam et.
                <span class="team-name">"Lulu Larue"</span>
              </p>
            </div>
            <div class="tem-item">
              <div class="team-face"></div>
              <p class="team-story">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sollicitudin augue, bibendum facilisis quam. Duis posuere tincidunt odio condimentum hendrerit. Pellentesque faucibus quam et.
                <span class="team-name">"Lulu Larue"</span>
              </p>
            </div>
          </div>
        </div>
      </section>

		</main>

	</div><!-- .primary -->


<?php get_footer(); ?>