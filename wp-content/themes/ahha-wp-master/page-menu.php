<?php
/*
Template Name: Menu
*/
get_header(); ?>
<section class="padding-top--alpha padding-bottom--alpha background--green">
  <div class="row">
    <div class="columns-10__l offset-1__l">
      <?php dynamic_sidebar('Food Menu Widget'); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>