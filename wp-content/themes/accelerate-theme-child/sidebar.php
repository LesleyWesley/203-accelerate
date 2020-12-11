<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

<div id="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #primary-sidebar -->

	<?php else : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<aside class="widget widget_text">
				<div class="textwidget">
					<p>This is a practice site for our <a href="http://skillcrush.com/">Skillcrush</a> students. <a href="https://skillcrush.com/wordpress-blueprint-package-first-to-know">We’d love to see you in class!</a></p>
				</div>
			</aside>

			<aside class="widget widget_search">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search" />
					<input type="submit" id="searchsubmit" value="" />
				</form>
			</aside>

			<aside class="widget widget_categories">
				<h2 class="widget-title">Categories</h2>
				<ul>
					<li><a href="">Books </a></li>
					<li><a href="">My Notes</a></li>
					<li><a href="">Photos</a></li>
					<li><a href="">Videos</a></li>
					<li><a href="">Quotes</a></li>
				</ul>
			</aside>

			<aside class="widget widget_archive">
				<h2 class="widget-title">Archives</h2>
				<ul>
					<li><a href="">September 2014</a></li>
					<li><a href="">August 2014</a></li>
					<li><a href="">July 2014</a></li>
					<li><a href="">June 2014</a></li>
					<li><a href="">May 2014</a></li>
				</ul>
			</aside>

			<aside class="widget widget_events">
				<h2 class="widget-title">Events</h3>
				<ul>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Brooklyn.png" alt=""/></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Rails.png" alt=""/></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Etsy.png" alt=""/></a></li>
				</ul>
			</aside>

			<aside class="widget widget_newsletter">
					<h2 class="widget-title">Sign up for our Newsletter!</h2>
					<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://gmail.us7.list-manage.com/subscribe/post?u=07aae50d4a652f597b5384e6a&amp;id=d706116ddf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_07aae50d4a652f597b5384e6a_d706116ddf" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
			</aside>
		</div>
	<?php endif; ?>
</div>
