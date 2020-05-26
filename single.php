<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mohamednajiub
 */

get_header();
?>
<?php
while (have_posts()) :
	the_post();

?>
	<header class="page--header" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/1220x400' ?>')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center align-items-center align-content-center flex-column">
				<h2 class="page--title my-2"><?php single_post_title() ?></h2>
				<time datetime="<?php echo get_the_date('d-M-Y') ?>"><?php echo get_the_date('d-M-Y') ?></time>
				<?php the_category( ) ?>
			</div>
		</div>
	</header>
<?php
	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'mohamednajiub') . '</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'mohamednajiub') . '</span> <span class="nav-title">%title</span>',
		)
	);

endwhile; // End of the loop.
?>

<?php get_footer(); ?>
