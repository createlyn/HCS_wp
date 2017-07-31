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
          <img src="assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="assets/src/img/images-cake.png" class="image-list__image" >
        </li>
        <li class="image-list__item">
          <img src="assets/src/img/images-cake.png" class="image-list__image" >
        </li>
      </ul>
    </section>
    <section class="page__section blog__section background--purple margin-bottom--reset">
      <header class="blog__header text--center">
        <h1><?php _e( 'Talk Chicken', 'html5blank' ); ?></h1>
        <a href="<?php bloginfo('url'); ?>/blog" class="button--secondary">View all blog posts</a>
      </header>
      <div class="container">
      <?php get_template_part('partials/loop'); ?>

      <?php get_template_part('partials/pagination'); ?>
        <div class="row">
          <ul class="blog__preview columns-4__s columns-9__m">
            <li class="blog__preview-item columns-4__s columns-3__m"">
              <img src="assets/src/img/blog-meal.png" class="blog__image" >
              <div class="blog__preview-content">
                <h3>Blog title here</h3>
                <p>Integer consequat auctor metus et volutpat. Ut vitae nisi metus. Quisque luctus congue mattis. Ut vitae nisi metus. Quisque luctus congue mattis.</p>
                <a href="#" class="button--secondary">read more</a>
              </div>
            </li>
            <li class="blog__preview-item columns-4__s columns-3__m">
              <img src="assets/src/img/blog-meal.png" class="blog__image" >
              <div class="blog__preview-content">
                <h3>Blog title here</h3>
                <p>Integer consequat auctor metus et volutpat. Ut vitae nisi metus. Quisque luctus congue mattis.Ut vitae nisi metus. Quisque luctus congue mattis.</p>
                <a href="#" class="button--secondary">read more</a>
              </div>
            </li>
            <li class="blog__preview-item columns-4__s columns-3__m">
              <img src="assets/src/img/blog-meal.png" class="blog__image" >
              <div class="blog__preview-content">
                <h3>Blog title here</h3>
                <p>Integer consequat auctor metus et volutpat. Ut vitae nisi metus. Quisque luctus congue mattis. Ut vitae nisi metus. Quisque luctus congue mattis.</p>
                <a href="#" class="button--secondary">read more</a>
              </div>
            </li>
          </ul>
          </div>
          <div class="row">
            <a href="#" class="blog__view-more">view all > </a>
          </div>
        </div>
      </div>
    </section>
	</main>

<?php get_footer(); ?>
