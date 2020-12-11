<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
	       <h2>Accelerate is a strategy and marketing agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
		</div><!-- .main-content -->
	</div><!-- #primary -->

  <section class="our-services">
    <div class="site-content">

				<?php while( have_posts()): the_post();
					$service_title_1 = get_field('service_title_1');
					$service_about_1 = get_field('service_about_1');
					$service_icon_1 = get_field('service_icon_1');

					$service_title_2 = get_field('service_title_2');
					$service_about_2 = get_field('service_about_2');
					$service_icon_2 = get_field('service_icon_2');

					$service_title_3 = get_field('service_title_3');
					$service_about_3 = get_field('service_about_3');
					$service_icon_3 = get_field('service_icon_3');

					$service_title_4 = get_field('service_title_4');
					$service_about_4 = get_field('service_about_4');
					$service_icon_4 = get_field('service_icon_4');
					?>


      		<h4><?php the_title(); ?></h4>
      		<p class="heading">We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>

      		<div class="services">


            <article class="our-service">
                <aside class="our-service-sidebar">
                    <h2><?php echo $service_title_1; ?></h2>
                    <p><?php echo $service_about_1; ?></p>
                </aside>

                <div class="our-service-icon">
                    <img src="<?php echo $service_icon_1; ?>" />
                </div>
            </article>

						<article class="our-service">
								<div class="our-service-icon">
										<img src="<?php echo $service_icon_2; ?>" />
								</div>

								<aside class="our-service-sidebar">
                    <h2><?php echo $service_title_2; ?></h2>
                    <p><?php echo $service_about_2; ?></p>
                </aside>
						</article>

						<article class="our-service">
								<aside class="our-service-sidebar">
										<h2><?php echo $service_title_3; ?></h2>
										<p><?php echo $service_about_3; ?></p>
								</aside>

								<div class="our-service-icon">
										<img src="<?php echo $service_icon_3; ?>" />
								</div>
						</article>

						<article class="our-service">
								<div class="our-service-icon">
										<img src="<?php echo $service_icon_4; ?>" />
								</div>

								<aside class="our-service-sidebar">
                    <h2><?php echo $service_title_4; ?></h2>
                    <p><?php echo $service_about_4; ?></p>
                </aside>
						</article>

        <?php endwhile; //end of the loop ?>
      </div>

    </div>
  </section>

  <section class="contact-section">
      <div class="site-content">

        <h2>Interested in working with us?</h2>
        <a class="button" href="http://localhost:8888/accelerate/contact-us/ ">Contact Us</a>

      </div>
  </section>

  <?php get_footer(); ?>
