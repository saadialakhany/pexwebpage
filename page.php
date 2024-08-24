<?php  
 
 /** Page Template **/

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
        }
        ?>
        <?php 
        the_content(); ?>
        <?php
      }
      ?>
    </div>

  </div>

<?php 
get_footer();?>