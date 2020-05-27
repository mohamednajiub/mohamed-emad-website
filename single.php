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
		<section class="content">
			<div class="container">
				<article>
					<?php the_content(); ?>
				</article>
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
		</section>
		<?php
		$related = new WP_Query(
			array(
				'category__in'   => wp_get_post_categories($post->ID),
				'posts_per_page' => 4,
				'post__not_in'   => array($post->ID)
			)
		);

		if ($related->have_posts()) :
		?>
			<section class="related-articles">
				<div class="container">
					<h3 class="section--title">Related Articles:</h3>
					<div class="row align-items-center justify-content-center">
						<?php

						while ($related->have_posts()) :
							$related->the_post(); ?>

						<?php
							get_template_part('template-parts/content', get_post_type());
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</section>
		<?php
		endif;
		?>

	</main>
<?php
endwhile; // End of the loop.
?>

<?php get_footer(); ?>
