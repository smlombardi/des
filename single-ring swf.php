<?php
/**
 * The template file for single posts.
 *
 * WARNING: This template file is a core part of the
 * Theme Blvd WordPress Framework. It is advised
 * that any edits to the way this file displays its
 * content be done with via hooks, filters, and
 * template parts.
 *
 * @author		Jason Bobich
 * @copyright	Copyright (c) Jason Bobich
 * @link		http://jasonbobich.com
 * @link		http://themeblvd.com
 * @package 	Theme Blvd WordPress Framework
 */

get_header();
?>

	<div id="sidebar_layout" class="clearfix">
		<div class="sidebar_layout-inner">
			<div class="row-fluid grid-protection">

				<?php get_sidebar( 'left' ); ?>

				<!-- CONTENT (start) -->

				<div id="content" class="span12 clearfix" role="main">
					<div class="inner">

						<?php
						$ring = get_the_title();
						$ringpath = '/wp-content/uploads/diamond-rings/' ;
					?>

					<section class="ring-content cf">
						<div class="ring-left">

						<?php
							$swf_file =  $ringpath . $ring .'.swf';
							if (file_exists($swf_file)) { ?>
							<script type="text/javascript">
								swfobject.registerObject("<?= $ringpath . $ring;?>.swf", "10.0.0.0", "expressInstall.swf");
							</script>
							<script type="text/javascript">
								var flashvars = {};
								var params = {};
								var attributes = {};
								swfobject.embedSWF("<?= $ringpath . $ring;?>.swf", "myAlternativeContent", "360", "280", "10.0.0", false, flashvars, params, attributes);
							</script>
							<div id="myAlternativeContent">
								<img src="<?= $ringpath . $ring;?>.jpg" alt="">
							</div>
							<noscript>
								<img src="<?= $ringpath . $ring;?>.jpg" alt="">
							</noscript>
							<?php } else { ;?>
								<img src="<?= $ringpath . $ring;?>.jpg" alt="">
							<?php }; ?>

						</div>
						<div class="ring-right">
							<h2 class="exclusive">De’S Exclusive Collection</h2>
							<h1>Style Number <?= $ring; ?></h1>
							<p>For more information<br>
								about this exclusive style please <a href="/contact-us/">contact us</a>
								<br>or call 845.452.0026</p>

								<?php the_content(); ?>


						</div>
					</section>

					</div><!-- .inner (end) -->
				</div><!-- #content (end) -->

				<!-- CONTENT (end) -->

				<?php get_sidebar( 'right' ); ?>

			</div><!-- .grid-protection (end) -->
		</div><!-- .sidebar_layout-inner (end) -->
	</div><!-- #sidebar_layout (end) -->

<?php get_footer(); ?>