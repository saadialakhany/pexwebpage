<?php  
 

get_header();
?>

<div class="content-area">

    <div class="title-section">
      <h1>
        <?php the_title();?>
      </h1>
    </div>

    <div class="main">
      <?php 
      if(have_posts()){
        while(have_posts()){
          the_post();

          the_content(); ?>
          <?php
        }
      }
      ?>
       <div class="author-details">
                      <?php $author_thumbnail = get_field('author_thumbnail'); 
                      ?>
                      <?php if ($author_thumbnail) : ?>
                          <img src="<?php echo esc_url($author_thumbnail['url']); ?>" alt="<?php echo esc_attr($author_thumbnail['alt']); ?>" />
                      <?php else : ?> 
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person-1.png" alt="thumbnail of the author" />
                      <?php endif; ?> 
                      <p><?php echo esc_html(the_field('author_details')); ?></p>
              </div>
    </div>

  </div>

<?php 
get_footer();?>