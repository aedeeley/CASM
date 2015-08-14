<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
            <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
            <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css" />
            <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
            <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
    </head>

    <body <?php body_class(); ?>>
        <a href="#" class="mobile"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="CASM logo" /></a>
        <section id="nav" role="navigation">
            <div class="row">
                <label for="show-menu" class="show-menu">Show Menu</label>
                <input type="checkbox" id="show-menu" role="button">
                <ul id="menu">
                    <li><a href="#" class="hvr-underline-reveal">What is Cybersecurity?</a></li>
                    <li><a href="#" class="hvr-underline-reveal">Program Overview</a></li>
                    <li id="logo"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="CASM Logo" /></a></li>
                    <li><a href="#" class="hvr-underline-reveal">Why Partner?</a></li>
                    <li><a href="#" class="hvr-underline-reveal">Industry</a></li>
                    <li><a href="#" class="hvr-underline-reveal">Contact</a></li>
                </ul>
            </div>
        </section>

        <?php if(is_home()) { ?>
            <section id="slider">
                <div class="row">
                    <div class="large-12 columns">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide.jpg" alt="Slider" />
                    </div>
                </div>
            </section>
            <?php }; ?>