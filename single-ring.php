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
						$filepath = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/diamond-rings/'. $ring .'.mp4'
					?>

					<section class="entry-content cf">
						<div class="ring-left column grid_8">
							<?php
								$ring_video_mp4 =  $ringpath . $ring .'.mp4';
								$ring_video_webm =  $ringpath . $ring .'.webm';
								$ring_image =  $ringpath . $ring .'.jpg';
								if (file_exists($filepath)) { ?>
								   <video controls preload="auto" autoplay loop poster="<?= $ring_image; ?>">
								    <source src="<?= $ring_video_mp4; ?>" type='video/mp4' />
								    <source src="<?= $ring_video_webm; ?>" type='video/webm' />
								   </video>
								<?php } else {; ?>
								   <img src="<?= $ring_image; ?>" alt="<?= $ring ?>">
								<?php }; ?>
						</div>
						<div class="ring-right column grid_4 last">
							<div class="ring-details">
								<h2 class="exclusive">De’S Exclusive Collection</h2>
								<h1>Style Number <?= $ring; ?></h1>
								<p>For more information<br>
									about this exclusive style please <a style="white-space: nowrap;" href="/contact-us/">contact us</a>
									<br>or call 845.452.0026
								</p>
							</div>
							<?php the_content(); ?>
						</div>
					</section>

					</div><!-- .inner (end) -->
				</div><!-- #content (end) -->

				<!-- CONTENT (end) -->

				<?php //get_sidebar( 'right' ); ?>

			</div><!-- .grid-protection (end) -->
		</div><!-- .sidebar_layout-inner (end) -->
	</div><!-- #sidebar_layout (end) -->

<?php get_footer(); ?>
