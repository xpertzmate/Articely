<?php

/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<section class="aty__-block-wrapper py-60">
	<div class="container">

		<div class="row row--flex">
			<?php
			while (have_posts()) :
				the_post();
			?>
				<div class="col col--lg-4 aty__-block-item">
					<a href="<?php the_permalink(); ?>" class="aty__-block-inner">
						<div class="aty__-block-img-wrapper">
							<?php the_post_thumbnail("full"); ?>
						</div>
						<!-- /.aty__-block-img-wrapper -->
						<div class="aty__-block-title">
							<h4 class="aty__-block-heading"><?php the_title(); ?></h2>
						</div>
						<!-- /.aty__-block-title -->
					</a>
				</div>
				<!-- /.col--lg-4 aty__-block-item -->
			<?php
			endwhile;
			?>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<?php
get_footer();
