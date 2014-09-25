<?php
/* template name: Rings */

get_header();
?>

	<div id="sidebar_layout" class="clearfix">
		<div class="sidebar_layout-inner">
			<div class="row-fluid grid-protection">

				<?php get_sidebar( 'left' ); ?>

				<!-- CONTENT (start) -->

				<div id="content" class="span12 clearfix" role="main">
					<div class="inner">
						<!-- get the contents of the WP page first -->
						<?php while (have_posts()) : the_post(); ?>
							<!-- page title -->
							<h1 class="category-title"><?php the_title(); ?></h1>
							<!-- the subtitle is the content of the page -->
							<div class="category-subtitle"><?php the_content(); ?></div>
						<?php endwhile; ?>
						<!-- end page content -->


							<!-- now the loop for the items -->
							<table id="rings">
							<?php
								$args = array( 'post_type' => 'ring', 'posts_per_page' => -1 );
								$loop = new WP_Query( $args );
								$item = 1;
								if ( have_posts() ) { $count = 0;
									while ( $loop->have_posts() ) { $loop->the_post(); $count++;
							?>
							<? if ($item > 4) { $item = 1; } ?>
							<? if ($item == 1) {
								echo '<tr>';
							} ?>
								<td class="entry ring span3 text-center" >
									<?php
									$ring = get_the_title();
									$ringpath = '/wp-content/uploads/diamond-rings/' ;
									?>
									<div class="ring-thumb">
										<a href="<?php the_permalink();?>"><img src="<?= $ringpath . $ring;?>.jpg" alt=""></a>
									</div>
									<a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
									<?php //the_content(); ?>
								</td><!-- /.entry -->
							<? if ($item == 4) {
								echo '</tr>';
							} ?>


								<?php $item++; ?>


							<?php } // End WHILE Loop ?>
							</table>
							<?php } else {
							?>
							<article <?php post_class(); ?>>
								<div class="article-inner">
								   <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
								</div><!-- /.article-inner -->
							</article><!-- /.post -->
						<?php } // End IF Statement ?>




					</div><!-- .inner (end) -->
					<p class="clearfix">&nbsp;</p>
				</div><!-- #content (end) -->

				<!-- CONTENT (end) -->

				<?php get_sidebar( 'right' ); ?>

			</div><!-- .grid-protection (end) -->
		</div><!-- .sidebar_layout-inner (end) -->
	</div><!-- .#sidebar_layout (end) -->

<?php get_footer(); ?>