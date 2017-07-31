<?php
/*
Template Name: Blog Posts
*/
?>

<?get_header(); ?>

  <?php query_posts('post_type=post&post_status=publish&posts_per_page=9&paged='. get_query_var('paged')); ?>
<section class="background--purple">
    <div class="row">
        <ul class="blog__preview columns-4__s columns-9__m columns-10__l offset-1__l">
          <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
          <li class="blog__preview-item columns-4__s columns-3__m"">
            <div id="post-thumbnails">
              <p><?php the_post_thumbnail('thumbnail');  ?></p>
              <a href="<?php the_permalink(); ?>">
                <h3 class="text--white"><?php the_title(); ?></h3>
              </a>
              <p class="text--white"><?php the_excerpt();  ?></p>
            </div>
                <?php
            endwhile;?>
          </li>
        </ul>
            <!-- Navigation -->
        <div class="navigation">
            <?php the_posts_pagination( array( 'mid_size' => 10 ) ); ?>
            <?php    endif; ?>
        </div>
      </div>

</section>




<?php get_footer(); ?>