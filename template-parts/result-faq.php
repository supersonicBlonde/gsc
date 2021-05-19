<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <div class="text-center my-2"><strong><?php echo __('Search results' , 'gsc'); ?></strong></div>
      <div class="text-center">
      <?php
          $total_results = count($args['posts']);
          $query = $args['query'];
          if($total_results > 0):
            echo __('We found ' , 'gsc');
            echo $total_results; 
            echo __(' pages with the keyword ' , 'gsc'); 
            echo '<strong>"'.$query.'"</strong>';
          else:
            echo __('Sorry, nothing on ' , 'gsc');
            echo '<strong>"'.$query.'"</strong>'; 
            echo __(' keyword' , 'gsc'); 
          endif;
          ?>
          </div>
      </div>
  </div>
</div>


<?php if($total_results > 0): ?>
<div class="section regular-spacing">
  <div class="container">
    <div class="row">
      <?php foreach($args['posts'] as $arg): ?>  
        <div class="col-12 col-md-6">
          <div class="blog-item mb-5">
            <?php 
            $default_url = get_template_directory_uri().'/img/blog-default.png';
            $src = !$arg['thumbnail']?$default_url:$arg['thumbnail']; 
            ?>
            <div><img src="<?php echo $src ?>" alt=""></div>
            <div class="blog-meta my-3">
              <?php echo $arg['date']; ?> / 
              <?php echo $arg['author']; ?> / 
              <?php // echo comments_number('0' , '1' , 'comments')." ".__('comment' , 'gsc'); ?>
            </div>
            <h2><?php echo $arg['title']; ?></h2>
            <p><?php echo $arg['excerpt']; ?></p>
            <a href="<?php echo $arg['permalink']; ?>" class="button default">Read more</a>
          </div>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>
<?php endif; ?>
