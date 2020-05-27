<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mohamednajiub
 */

?>


<article class="col-md-4 col-lg-3 my-2 card blog--card">
	<header class="card-image">
		<?php the_post_thumbnail(); ?>
		<div class="overlay">
			<a href="<?php the_permalink(); ?>" class="btn btn--primary">Read More</a>
		</div>
	</header>
	<div class="card-details">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
		<p><?php echo wp_trim_words(get_the_content(), 9) ?></p>
	</div>
	<footer>
		<div class="footer-data">
			<time datetime="<?php echo get_the_date('d-M-Y') ?>"><?php echo get_the_date('d-M-Y') ?></time>

			<?php
				if(has_category()){
					the_category();
				}
			?>
		</div>
		<?php
			if(has_tag()):
		?>
		<div class="post-tags">
			<p>Tags: </p>
			<?php the_tags('', '') ?>
		</div>
		<?php
			endif;
		?>
	</footer>
</article>


<?php

?>
