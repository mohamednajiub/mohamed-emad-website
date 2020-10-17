<?php get_header() ?>
<header class="my-4" id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 header--photo">
				<img src="<?php echo get_template_directory_uri(); ?>/dest/images/Mohamed-Najiub.jpg" alt="Mohamed Najiub Picture">
			</div>
			<div class="col-sm-6 header--details">
				<h1>Mohamed Najiub</h1>
				<p>As an Accountant turned Front-end, Najiub has developed a unique perspective when it comes to
					capturing the story behind his work. Mohamed Najiub is a Front-end developer who is committed to
					quality and teaching. He has spent the last 3 years creating a portfolio, volunteering work and
					sharing the experience. is currently most passionate about office work.
				</p>
				<div class="header--footer">
					<a href="https://mohamednajiub.me/wp-content/uploads/2020/03/Mohamed-Najiub-Resume.pdf" rel="noreferrer noopener" target="_blank" class="btn btn--primary">Resume</a>
					<a href="#contact" class="btn btn--default">contact</a>
				</div>
			</div>
		</div>
	</div>
</header>
<?php
$args = array(
	'post_type' => 'technologies',
	'post_status' => 'publish',
	'posts_per_page' => -1
);
$technologies = new WP_Query($args);
if ($technologies->have_posts()) :
?>
	<section class="technologies my-5 py-3" id="technologies">
		<div class="container">
			<h3 class="my-5 section--title">Techniques I know</h3>
			<div class="row my-3 justify-content-center align-items-center flex-wrap ">
				<?php
				while ($technologies->have_posts()) :
					$technologies->the_post();
				?>
					<div class="col-4 col-md-2 col-lg-2 col-xl-2 my-2">
						<img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_the_title(get_post_thumbnail_id()); ?>" />
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	</section>
<?php
endif;
wp_reset_postdata();
?>

<?php

$args = array(
	'post_type' => 'experiences',
	'post_status' => 'publish',
	'meta_key' => 'mn_job_start_date',
	'orderby' => 'meta_query',
	'order' => 'DESC',
	'meta_query' => array(
		array(
			'key' => 'mn_job_start_date',
			'value' => date("ddmmYY"),
			'compare' => '<='
		)
	),
	'posts_per_page' => -1
);

$experiences = new WP_Query($args);

// echo '<pre>'. json_encode($experiences->get_posts(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) .'</pre>';
if ($experiences->have_posts()) :
?>

	<section class="experiences my-5 py-3" id="experience">
		<div class="container">
			<h3 class="my-5 section--title">Things I Do</h3>
			<div class="horizontal-timeline" id="experiences">
				<div class="events-content">
					<ul>
						<?php
						while ($experiences->have_posts()) :
							$experiences->the_post();
							$experience_start_date = get_post_meta(get_the_ID(), 'mn_job_start_date');
							$experience_end_date = get_post_meta(get_the_ID(), 'mn_job_end_date');

							$used_attr_start_date = date('d/m/Y', strtotime($experience_start_date[0]));
							$used_string_start_date = date('d-m-Y', strtotime($experience_start_date[0]));
						?>
							<li class=" experience--item" data-horizontal-timeline='{"date": "<?php echo ($used_attr_start_date); ?>", "customDisplay": "<?php echo $used_string_start_date; ?>"}'>
								<a href="#" class="experience--details">
									<h5 class="my-2"><?php the_title() ?></h5>
									<div class="job--details">
										<img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" title="<?php echo get_the_title(get_post_thumbnail_id()); ?>" class="my-3" />
										<div class="job--timeline ml-4 my-3">
											<time datetime="<?php echo ($used_string_start_date); ?> 09:00"><?php echo ($used_string_start_date); ?></time>
											<span>to</span>
											<?php
											if ($experience_end_date[0]) :
												$used_string_end_date = date('d-m-Y', strtotime($experience_end_date[0]));
											?>
												<time datetime="<?php echo ($used_string_end_date); ?> 09:00"><?php echo ($used_string_end_date); ?></time>
											<?php
											else :
											?>
												<p class="m-0">Present</p>
											<?php
											endif;
											?>
										</div>
									</div>
								</a>
							</li>
						<?php
						endwhile;
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php
endif;
wp_reset_postdata();
?>

<?php
$args = array(
	'post_type' => 'portfolio',
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => 4
);
$portfolio = new WP_Query($args);
if ($portfolio->have_posts()) :
?>
	<section class="portfolio my-5 py-3" id="portfolio">
		<div class="container">
			<h3 class="my-5 section--title">Work Samples</h3>

			<div class="row my-3 justify-content-center align-items-center flex-wrap ">
				<?php
				while ($portfolio->have_posts()) :
					$portfolio->the_post();
				?>
					<article class="col-md-4 col-lg-3 my-2">
						<div class="card">
							<div class="card-image">
								<?php the_post_thumbnail(); ?>
								<div class="overlay">
									<a href="<?php the_permalink();?>" class="btn btn--primary">See Project</a>
								</div>
							</div>
							<div class="card-details">
								<h3><a href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
								<p><?php the_excerpt(); ?></p>
								<?php
								$site_link = get_post_meta(get_the_ID(), 'site_link', true);
								$project_repo = get_post_meta(get_the_ID(), 'project_repo', true);
								if ($site_link || $project_repo) :
								?>
									<div class="card-details-links">
										<ul>
											<?php
											if ($site_link) :
											?>
												<li><a href="<?php echo $site_link; ?>"><i class="fas fa-link"></i></a></li>
											<?php
											endif;
											if ($project_repo) :
											?>
												<li><a href="<?php echo $project_repo; ?>"><i class="fab fa-github"></i></a></li>
											<?php
											endif;
											?>
										</ul>
										<?php
										$company_url = get_post_meta(get_the_ID(), 'portfolio_company_image', true);
										if ($company_url) :
											$get_image_id = attachment_url_to_postid($company_url);
											$alt = get_post_meta($get_image_id, '_wp_attachment_image_alt', true);
										?>
											<img src="<?php echo $company_url ?>" alt="<?php echo $alt; ?>">
										<?php
										endif;
										?>
									</div>
								<?php
								endif;
								?>
							</div>
						</div>
					</article>
				<?php
					endwhile;
				?>
			</div>
		</div>
	</section>
<?php
endif;
wp_reset_postdata();
?>

<?php
$args = array(
	'post_type'   => 'Post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 4
);
$blog = new WP_Query($args);
if ($blog->have_posts()) :
?>
	<section class="blog my-5 py-3" id="blog">
		<div class="container">
			<h3 class="my-5 section--title">Blog</h3>

			<div class="row my-3 justify-content-center align-items-center flex-wrap ">
				<?php
				while ($blog->have_posts()) :
					$blog->the_post();
				?>
					<article class="col-md-4 col-lg-3 my-2">
						<div class="card">
							<div class="card-image">
								<?php the_post_thumbnail(); ?>
								<div class="overlay">
									<a href="<?php the_permalink();?>" class="btn btn--primary">Read Article</a>
								</div>
							</div>
							<div class="card-details">
								<h3><a href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
								<p><?php echo wp_trim_words( get_the_content(), 9 ) ?></p>
								<div class="card-details-links">

								</div>
							</div>
						</div>
					</article>
				<?php
				endwhile;
				?>
			</div>
			<?php
				$posts_object = wp_count_posts('post','');
				$posts_value_array = get_object_vars($posts_object);
				$posts_num = $posts_value_array['publish'];
				if($posts_num > 4 ):
			?>
			<div class="row justify-content-center">
				<a href="<?php echo site_url( 'blog'); ?>" class="btn btn--primary">Show All</a>
			</div>
			<?php
				endif;
			?>
		</div>
	</section>
<?php
endif;
wp_reset_postdata();
?>

<section class="contact my-5 py-3" id="contact">
	<div class="container">
		<h3 class="my-5 section--title">Get in Touch</h3>

		<?php echo do_shortcode('[contact-form-7 id="132" title="Contact Form"]');  ?>

	</div>
</section>
<?php get_footer(); ?>
