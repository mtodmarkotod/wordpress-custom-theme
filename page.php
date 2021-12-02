<?php 

get_header();
 
while(have_posts()) {
    the_post(); ?>
    <div class="page-banner home-banner">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <?php 
            $parentId = wp_get_post_parent_id(get_the_ID());
            if ($parentId) {?>
              <a class="banner-navigation" href="<?php echo get_permalink($parentId); ?>">Back to <?php echo get_the_title($parentId) . ' / '; ?></a><span> <?php the_title(); ?></span><?php
            }
             ?>
          
            <h1 class="mb-4"><?php the_title(); ?></h1>
            <p class="text-lg mb-5"><?php the_content(); ?></p>

            <a href="#" class="btn btn-outline border text-secondary">More Info</a>
            <a href="#" class="btn btn-primary btn-split ml-2">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place">
              <img src="<?php  echo get_theme_file_uri('/images/bg_image_1.png'); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php
}

get_footer();

?>

