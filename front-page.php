<?php get_header() ?>
<header class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 header--photo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Mohamed-Najiub.jpg" alt="Mohamed Najiub Picture">
            </div>
            <div class="col-sm-6 header--details">
                <h1>Mohamed Najiub</h1>
                <p>As an Accountant turned Front-end, Najiub has developed a unique perspective when it comes to
                    capturing the story behind his work. Mohamed Najiub is a Front-end developer who is committed to
                    quality and teaching. He has spent the last 3 years creating a portfolio, volunteering work and
                    sharing the experience. is currently most passionate about office work.
                </p>
                <div class="header--footer">
                    <a href="#" class="btn btn--primary">Resume</a>
                    <a href="#" class="btn btn--default">contact</a>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
    $args = array(
        'post_type' => 'technologies',
        'post_status' => 'publish',
        'orderby' => 'date'
    );
    $technologies = new WP_Query($args);
    if ($technologies->have_posts()):
?>
    <section class="technologies my-5 py-3">
        <div class="container">
            <h3 class="my-5">Techniques I know</h3>
            <div class="technologies--container my-3">
                <?php
                    while ( $technologies->have_posts() ) :
                        $technologies->the_post();
                ?>      
                    <img src="<?php the_post_thumbnail_url() ?>"
                        alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                        title="<?php echo get_the_title(get_post_thumbnail_id()); ?>"
                        class="col-6 col-md-3 col-lg-2 col-xl-1"
                    />
                <?php
                    endwhile;    
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
    $args = array(
        'post_type' => 'experience',
        'post_status' => 'publish',
        'orderby' => 'date'
    );
    $experiences = new WP_Query($args);
    if ($experiences->have_posts()):
?>
    <section class="experiences my-5 py-3">
        <div class="container">
            <div class="horizontal-timeline" id="example">
                <div class="events-content">
                    <ul>
                        <li class="selected experience--item--copy" data-horizontal-timeline='{"date": "16/01/2014", "customDisplay": "16-01-2014"}'>
                            <a href="#"  class="experience--details">
                                <h5 class="my-2">position</h5>
                                <div class="job--details">
                                    <img src="" alt="" class="company--image">
                                    <div class="job--timeline">
                                        <time datetime="2008-02-14 20:00">start day</time>
                                        <span>to</span>
                                        <time datetime="2008-02-14 20:00">end day</time>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
<?php endif; ?>
<?php get_footer(); ?>