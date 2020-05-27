<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mysite
 */

get_header();
?>

<?php if (have_posts()) : ?>

	<header class="page--header">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center align-items-center align-content-center flex-column">
				<?php the_archive_title('<h2 class="page--title my-2">', ' Articles</h2>'); ?>
				<?php
				$archive_description = get_the_archive_description();
				if ($archive_description) :
				?>
					<p class="archive-description">
						<?php echo $archive_description; ?>
					</p>
				<?php
				endif;
				?>
			</div>
		</div>
	</header><!-- .page-header -->

<?php
	/* Start the Loop */
	while (have_posts()) :
		the_post();

		/*
	 * Include the Post-Type-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
	 */
		get_template_part('template-parts/content', get_post_type());

	endwhile;

	the_posts_navigation();

else :

	get_template_part('template-parts/content', 'none');

endif;
?>

<?php get_footer(); ?>
