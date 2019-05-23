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
</div>   <!-- From header.php -->

<?php
 get_footer();
