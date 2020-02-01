<?php get_header() ?>
<h1>
    <?php bloginfo('name'); ?>
</h1>
<p><?php bloginfo('description'); ?></p>
<?php
while (have_posts()) {
    the_post(); ?>
    <h3>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
<?php
    the_content();
};
get_footer();
?>