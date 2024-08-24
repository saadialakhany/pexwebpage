
<?php 
/**
 * The main template file
 *
 **/ 
get_header();


/************ Variables *********/

/** Hero Section **/
  $banner_title = get_field('banner_title');
  $banner_tagline = get_field('banner_tagline');
  $action_link = get_field('action_link');

/** Pink Section **/
  $pink_section_heading = get_field('pink_section_heading') ;
  $pink_section_content = get_field('pink_section_content');
  $pink_action_link = get_field('pink_section_link');

  /** About Section */
  $about_heading = get_field('about_heading');
  $about_highlighted_text = get_field('about_highlighted_text');
  $about_other_text = get_field('about_section_text');

  /** Purple/image-sketch Section */
  $purple_section_action_link = get_field('purple_section_action_link')

?>
        <section class="master-head">
          <div class="master-container">
            
          <?php if($banner_title): ?>
          <h1><?php echo $banner_title; ?></h1>
        <?php endif; ?> 

          <?php if("action_link"):?>
            <a href="<?php echo $action_link['url']; ?>" class="btn btn-header"><?php echo $action_link['title']; ?></a>
            <?php endif; ?> 
         
            <?php if($banner_tagline): ?>
          <?php echo $banner_tagline; ?>
          <?php endif;?>

          </div>
        </section>
      </div>
      <!--End of Container-->
    </div>
    <!--End of Top Section-->

    <section class="features">
      <div class="features-container">
      <?php 
          $num_features = 4; // Number of features
          for ($i = 1; $i <= $num_features; $i++): 
            $heading = get_field('feature_heading_'.$i);
            $content = get_field('feature_content_'.$i);
          ?>
            <?php if ($heading && $content): ?>
              <div class="feature-article">
                <h5><?php echo esc_html($heading); ?></h5>
                <?php echo ($content); ?>
              </div>
            <?php endif; ?>
          <?php endfor; ?>
      </div>
    </section>

    <section class="pink-section">
      <div class="pink-container">
        <img
          srcset="<?php echo get_template_directory_uri() ?>/assets/images/shape.png, 
              <?php echo get_template_directory_uri() ?>/assets/images/shape@2x.png 2x"
          src="<?php echo get_template_directory_uri() ?>/assets/images/shape.png"
          alt="Curve shape for feature section"
          class="pink-curve-object"
        />
        <div class="content-container">
          <?php if($pink_section_heading && $pink_section_content && $pink_action_link):?>
          <h1> <?php echo $pink_section_heading;?> </h1>
          <?php echo $pink_section_content;?>
          <a href="<?php echo $pink_action_link['url']?>" class="btn btn-pink"><?php echo $pink_action_link['title']?></a>
          <?php endif;?>
        </div>
      </div>
    </section>

    <section class="about-section">
      <div class="about-content">
        <div class="about-image"></div>
        <div class="about-text-content">
        <?php if($about_heading && $about_highlighted_text && $about_other_text):?>
          <h5><?php echo $about_heading;?></h5>
          <?php echo $about_highlighted_text;?>
        <?php echo $about_other_text;?>
        <?php endif;?>
        </div>
      </div>
    </section>

    <section class="image-sketch">
      <div class="image-container">
        <div class="purple-overlay"></div>
        <div class="text-container">
          <h1><?php the_field('purple_section_heading');?></h1>
         <?php echo the_field('purple_section_content');?>
          <a href="<?php echo $purple_section_action_link['url'];?>" class="btn btn-header"><?php echo $purple_section_action_link['title'];?></a>
          <p class="action-tagline"><?php the_field('purple_section_tagline')?></p>
        </div>
      </div>
    </section>

    <section class="post-image">
    <?php
                $args = array(
                  'p' => 122, 
                  'post_type' => 'post'
              );

              $post_query = new WP_Query($args);
              if ($post_query->have_posts()) {
                while ($post_query->have_posts()) {
                    $post_query->the_post();
              ?>
       <?php $background_image_url = get_the_post_thumbnail_url(); ?>
      <div class="post-image-container" style="background-image: url('<?php echo esc_url($background_image_url); ?>');">
     
      <div class="grey-overlay"></div>
      <div class="post-image-content">

     
            <div class="rounded-rectangle">
              <p><?php the_category(', '); ?></p>
            </div>
        
          <!-- Post Title -->
          <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
      
     
      <!-- Author Details -->
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
              <?php
           } 
        } 
       ?>
    </div>
    </div>
</section>


    <section class="about-section about-section-two">
      <div class="about-content about-content-end">
        <div class="about-text-content about-text-content-left">
        <?php if($about_heading && $about_highlighted_text && $about_other_text):?>
          <h5><?php echo $about_heading;?></h5>
          <?php echo $about_highlighted_text;?>
        <?php echo $about_other_text;?>
        <?php endif;?>
        </div>
        <div class="about-image about-image-two"></div>
      </div>
    </section>

    <section class="contact">
      <div class="contact-content">
        <h3>Get in touch</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <p class="contact-email">help@yomuma.com</p>
      </div>
    </section>

    <?php 
    get_footer();?>
