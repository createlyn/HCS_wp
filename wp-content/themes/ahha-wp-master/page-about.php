<?php
/*
Template Name: About
*/
get_header(); ?>

<section class="page__section about-hero__image">
      <h1 class="text--center text--uppercase">our story</h1>
    </section>
    <section class="page__section">
      <div class="container">
        <div class="row">
            <?php dynamic_sidebar('Intro About Text'); ?>
            <?php dynamic_sidebar('Intro About Text 2'); ?>

        </div>
      </div>
    </section>
    <section class="page__section background--green margin--reset">
      <div class="container">
        <div class="row">
          <div class="about__hours text--center">
            <h2>Restaurant Hours</h2>
            <table class="hours-table__mobile">
              <tr>
                <td>Monday</td>
                <td rowspan="4">11am-9pm</td>
              </tr>
              <tr>
                <td>Tuesday</td>
              </tr>
              <tr>
                <td>Wednesday</td>
              </tr>
              <tr>
                <td>Thursday</td>
              </tr>
              <tr>
                <td>Friday</td>
                <td rowspan="2">11am-10pm</td>
              </tr>
              <tr>
                <td>Saturday</td>
              </tr>
              <tr>
                <td>Sunday</td>
                <td>closed</td>
              </tr>
            </table>
            <table class="hours-table__desktop">
              <tr>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                <td class="background--red text--white">sunday</td>
              </tr>
              <tr>
                <td colspan="4" class="text--center">11am-9pm</td>
                <td colspan="2" class="text--center">11am-10pm</td>
                <td class="background--red text--white">Closed</td>
              </tr>
            </table>
            <div class="site-navigation__call">
              <a href="tel:+1800229933" class="button--primary">Call ahead!</a>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>