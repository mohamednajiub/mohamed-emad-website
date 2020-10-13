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
</header>
<main>
    <section>
        <div class="container">
            <div class="row">
                <?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();
						get_template_part('template-parts/content', get_post_type());
					endwhile;
					?>
            </div>
        </div>
    </section>


    <section class="pagination">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <?php
					the_posts_pagination(
						array(
							'screen_reader_text' => ' ',
							'prev_text' => '<i class="fas fa-chevron-left"></i>',
							'next_text' => '<i class="fas fa-chevron-right"></i>'
						)
					);
					?>
            </div>
        </div>
    </section>
</main>
<?php

else :

	get_template_part('template-parts/content', 'none');

endif;
?>

<?php get_footer(); ?>