<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <h1 class="page_title"><?php the_title(); ?></h1>
    
    <p><?php the_content(); ?></p>
<?php
    
};
get_footer();
?>