<?php
/* template name: Diamond Engagement Rings */

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
							<ul id="ring-grid" class="block-grid-4">

								<?php
									$count = 1;
									$args = array( 'post_type' => 'ring', 'cat' => 17, 'posts_per_page' => -1,'orderby' => 'title', 'order' => 'ASC' );
									$loop = new WP_Query( $args );
									if ( have_posts() ) { $count = 0;
										while ( $loop->have_posts() ) { $loop->the_post(); $count++;
								?>

									<li class="ring-block">
										<?php
										$ring = get_the_title();
										$ringpath = '/wp-content/uploads/diamond-rings/' ;
										?>

										<div class="ring-thumb">
											<a href="<?php the_permalink();?>"><img src="<?= $ringpath . $ring;?>.jpg" alt=""></a>
										</div>
										<div class="ring-title">
											<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
										</div>
										<?php //the_content(); ?>
									</li><!-- /.entry -->



							<?php } // End WHILE Loop ?>

							</ul>

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
