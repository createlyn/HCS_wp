    <footer>
      <div class="footer__container">
        <div class="footer__connect text--center">
          <h3>connect with us</h3>
          <div class="footer--social">
            <a href="http://facebook.com" class="footer--social__item">
              <img src="<?php bloginfo('template_url'); ?>/assets/src/img/social-facebook.svg" alt="Harold's Chicken Shack Facebook">
            </a>
            <a href="http://instagram.com" class="footer--social__item">
              <img src="<?php bloginfo('template_url'); ?>/assets/src/img/social-instagram.svg" alt="Harold's Chicken Shack Facebook">
            </a>
            <a href="http://twitter.com" class="footer--social__item">
              <img src="<?php bloginfo('template_url'); ?>/assets/src/img/social-twitter.svg" alt="Harold's Chicken Shack Facebook">
            </a>
            <a href="mailto:caitlyn.zahn@gmail.com" class="footer--social__item">
              <img src="<?php bloginfo('template_url'); ?>/assets/src/img/social-email.svg" alt="Harold's Chicken Shack Facebook">
            </a>
          </div>
          <div class="email-signup">
            <h6>join our email list</h6>
            <input type="form" name="email">
            <a href="#" class="button"></a>
          </div>
          <div class="copyright">
            Copyright &copy; <?php echo date('Y'); ?> <a href="http://createlyn.com" target="_blank">Createlyn</a>. All Rights Reserved.
          </div>
        </div>
        <div class="footer__location text--center">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/src/img/logo-symbol.png" alt="Harold's Chicken Shack Logo" class="footer__logo" />
          </a>
          <p>harold’s chicken shack, Aurora <br>
              3577 E. New York Street<br>
              Suite #103, Aurora, IL 60504<br>
                (630) 499-8393</p>
        </div>

      </div>
    </footer>


    <?php wp_footer(); ?>

		<!-- TODO: ADD GOOGLE ANALYTICS -->

	</body>
</html>
