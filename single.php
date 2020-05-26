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
				<?php the_category() ?>
			</div>
		</div>
	</header>
	<main>
		<div class="container">
			<article>
				<?php the_content(); ?>
			</article>

			<!-- <section class="container">
				<div class="row">
					<div class="col-10 next-prev-article">
						<div class="btn prevBtn">
							<?php // previous_post_link('<p class="font-blod">previous article</p> %link', '%title', false);
							?>
						</div>

						<div class="btn nextBtn">
							<?php // next_post_link('<p class="font-blod">Next article</p> %link', '%title', false);
							?>
						</div>
					</div>
				</div>
			</section> -->
			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle"><i class="fas fa-chevron-left mr-2"></i>' . esc_html__('Previous Article', 'mohamednajiub') . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__('Next Article', 'mohamednajiub') . '<i class="fas fa-chevron-right ml-2"></i></span> <span class="nav-title">%title</span>',
					"screen_reader_text" => ' '
				)
			);
			?>
		</div>

	</main>
<?php
endwhile; // End of the loop.
?>

<?php get_footer(); ?>
