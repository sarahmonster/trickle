<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<?php get_sidebar(); ?>

						<div id="main" class="sevencol onepush clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<?php if(!is_front_page()): ?>
									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
								<?php endif; ?>


								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>

									<?php if ( is_front_page() AND 0 !== wp_count_posts( 'promotions' )->publish ): ?>
										<h2><a href="/promotions">Current Promotions</a></h2>
										<?php
										$queryObject = new WP_Query( 'post_type=promotions&posts_per_page=3' );
										// The Loop!
										if ($queryObject->have_posts()) {

										    while ($queryObject->have_posts()) {
										        $queryObject->the_post();
										        ?>

										<div>
										 <div class="fourcol first clearfix">
										 <?php the_post_thumbnail('full'); ?>
										 </div>

										 <div class="eightcol last clearfix">
											 <h3><?php the_title(); ?></h3>
											 <?php the_content(); ?>
										</div>
									</div>
										    <?php
										    }
										    ?>
										    <?php
										}
										?>
							<?php endif; ?>
							</section> <?php // end article section ?>






							</article> <?php // end article ?>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
