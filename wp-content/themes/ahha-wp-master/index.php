<?php get_header(); ?>

	<main role="main">
		<!-- section -->
    <section class="page__section hero__image">
      <h1 class="text--center text--uppercase">home of the fried chicken king</h1>
    </section>
    <section class="page__section text--center columns-5__m offset-2__m">
      <div id="home-intro">
        <?php dynamic_sidebar('Intro Home Text'); ?>
      </div>

      <a href="<?php bloginfo('url'); ?>/menu" class="button--secondary">view menu</a>
    </section>
    <section class="page__section image__section">
      <ul class="image-list">
        <li class="image-list__item">
          <img src="<?php bloginfo('template_url'); ?>/assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="<?php bloginfo('template_url'); ?>/assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="<?php bloginfo('template_url'); ?>/assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="<?php bloginfo('template_url'); ?>/assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="<?php bloginfo('template_url'); ?>/assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="<?php bloginfo('template_url'); ?>/assets/src/img/images-cake.png" class="image-list__image" >
        </li>
      </ul>
    </section>
    <section class="page__section blog__section background--purple margin-bottom--reset padding-top--mega padding-bottom--mega">
      <header class="blog__header text--center">
        <h1><?php _e( 'Talk Chicken', 'html5blank' ); ?></h1>
        <a href="<?php bloginfo('url'); ?>/blog" class="button--secondary">View all blog posts</a>
      </header>
       <?php query_posts('post_type=post&post_status=publish&posts_per_page=9&paged='. get_query_var('paged')); ?>
      <div class="container padding-top--alpha">
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
              <p><?php the_excerpt();  ?></p>
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
          <div class="row">
            <a href="<?php bloginfo('url'); ?>/blog" class="blog__view-more">view all > </a>
          </div>
        </div>
      </div>
    </section>
	</main>

<?php get_footer(); ?>
