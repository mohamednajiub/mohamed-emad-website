<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>

<nav>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 brand">
                <a href="<?php echo site_url(); ?>" title="Mohamed Najiub" class="brand--link">
                    <h1 class="m-0">Mohamed Najiub</h1>
                    <span>Front-end & WordPress Developer</span>
                </a>
            </div>
            <div class="col-md-6 navigation">
                <ul class="d-flex-md justify-content-between">
                    <li><a href="#" title="about">About</a></li>
                    <li><a href="#" title="about">Portfolio</a></li>
                    <li><a href="#" title="about">Blog</a></li>
                    <li><a href="#" title="about">Contact</a></li>
                </ul>
            </div>
            <div class="menu--toggler d-flex flex-column justify-content-between">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
</nav>