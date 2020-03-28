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
            <div class="col-lg-4 brand">
                <a href="<?php echo site_url(); ?>" title="Mohamed Najiub" class="brand--link">
                    <h1 class="m-0">Mohamed Najiub</h1>
                    <span>Front-end & WordPress Developer</span>
                </a>
            </div>
            <div class="col-lg-6 navigation">
                <div class="d-lg-none brand">
                    <a href="<?php echo site_url(); ?>" title="Mohamed Najiub" class="brand--link">
                        <h1 class="m-0">Mohamed Najiub</h1>
                        <span>Front-end & WordPress Developer</span>
                    </a>
                </div>
                <ul class="d-flex flex-column flex-lg-row justify-content-between p-0 align-items-center">
                    <li><a href="#about" title="about">About</a></li>
                    <li><a href="#technologies" title="Techniques">Techniques</a></li>
                    <li><a href="#experience" title="experience">experience</a></li>
                </ul>
            </div>
            <div class="menu--toggler d-flex d-lg-none flex-column justify-content-between" id="menu_toggler">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
</nav>