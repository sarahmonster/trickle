<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
				
						<?php get_sidebar(); ?>

						<div id="main" class="sevencol onepush clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e( '404 - Page Not Found', 'bonestheme' ); ?></h1>

							</header> <?php // end article header ?>

							<section class="entry-content">

								<p><?php _e( 'The page you were looking for was not found. We just revamped the site, so try looking in the navigation, or use the search form below to find what you&rsquo;re looking for.', 'bonestheme' ); ?></p>

							</section> <?php // end article section ?>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section> <?php // end search section ?>


						</article> <?php // end article ?>

					</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
