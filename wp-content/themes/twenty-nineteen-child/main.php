<?php
/*
Template Name: Main
*/
 get_header();
?>
<section class="main">
  <?php

  if (have_posts()) :
     while (have_posts()) :
        the_post();
           the_content();
     endwhile;
  endif;
  ?>

</section>

<section class="survey">
  <h3>Fill Out Our Survey!</h3>
  <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
</section>
</div>   <!-- From header.php -->

<?php
 get_footer();
