<?php $img = get_sub_field('image');?>
<div id="section1" class="section mt-5">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 mb-4 mb-md-0">
          <h1 class="colored"><?php the_sub_field('over_title_home_1'); ?></h1>
          <h2 class="intro-title"><?php the_sub_field('title_home_1'); ?></h2>
          <h4><?php the_sub_field('sub_title_home_1'); ?></h3>
          <p class="w-80"><?php the_sub_field('paragraph_home_1'); ?></p>
        <div>
          <a href="<?php echo the_sub_field('link_button_left'); ?>" target="_blank" class="button default"><?php the_sub_field('button_left_home_1_text') ?></a>
          <a href="<?php echo the_sub_field('link_button_right'); ?>" target="_blank" class="button invert"><?php the_sub_field('button_right_text_home_1') ?></a>
        </div>
      </div>
      
      <div class="col-12 col-md-5 text-center mb-4 mb-md-0">
          <!-- <div style=background-image:url(<?php echo $img['url']; ?>)></div> -->
        <?php
          $media_type = get_sub_field('media_type');
          if($media_type == "image"):
            $size = 'large'; 
            if( $img ):
                echo wp_get_attachment_image( $img, $size );
            endif;
            else:
                if(!empty(get_sub_field('video'))): ?>
                <video  poster="" id="bgvid" playsinline autoplay muted loop>
                  <source src="<?php the_sub_field('video') ?>" type="video/mp4">
                  I'm sorry; your browser doesn't support HTML5 video in WebM with VP8 or MP4 with H.264.
                </video>
              <?php endif; ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</div>