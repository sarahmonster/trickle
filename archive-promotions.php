<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<?php get_sidebar(); ?>

						<div id="main" class="sevencol onepush clearfix" role="main">


							<h1 class="archive-title"><?php post_type_archive_title(); ?></h1>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix entry-content' ); ?> role="article">

									 <div class="fourcol first clearfix">
									 <?php the_post_thumbnail('full'); ?>
									 </div>

									 <div class="eightcol last clearfix">
										 <h3><?php the_title(); ?></h3>
										 <?php the_content(); ?>
									</div>


							</article> <?php // end article ?>

							<?php endwhile; ?>

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<section class="entry-content">
											<p><?php _e( 'Sorry, there are currently no ongoing promotions. Please check back later!', 'bonestheme' ); ?></p>
										</section>
									</article>

							<?php endif; ?>

						</div> <?php // end #main ?>

						<?php get_sidebar(); ?>

								</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
