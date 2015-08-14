<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
    
    <div class="row content">
        <div class="large-6 columns">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/stock1.jpg" alt="Stock Photo" />
            <h2>We're building a defense team</h2>
            <p>Our Cyber Security Simulation Modeling program was developed by federal defense contractors, and will give you a tremendous advantage in the highly competitive field of IT Security. This program will prepare you with the necessary skills for the protection of networks, communication, and data as well as the knowledge base for planning, implementing, and managing enterprise-level security and system integrity. </p>
            <a href="#" class="button hvr-sweep-to-top">Sign up now</a>
      </div>
          
        <div class="large-6 columns">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/stock2.jpg" alt="Stock Photo" />
            <h2>Is your workforce prepared?</h2>
            <p>Our unique training model sets us apart. We’ve created a modelling and simulation training facility that allows us to simulate threats in a virtual environment and we train our staff against potential treats in a lab before you see them in your business. See how we can create custom scenarios for your business and help build your workforce.</p><br />
            <a href="#" class="button hvr-sweep-to-top">Partner with us</a>
      </div>
          <div class="clear"></div>
      </div>
      
    
    <div class="row banner">
      <div class="large-12 columns">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner-bg.jpg" alt="Banner" />
        <h2>Defend the Network</h2>
          <p>The Cyber Security Simulation Modeling platform offers a secure virtual environment that gives our students the ability to tactically test, evaluate, and train for current and next generation threats using scenario-based exercises.</p>
          <a href="#" class="button hvr-sweep-to-top">Enlist now</a>
      </div>
    </div>
      
      
    
    <div class="row content">        
        <div class="large-4 columns">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/stock3.jpg" alt="Stock Photo" />
            <h2>We're building a defense team</h2>
            <p>Our Cyber Security Simulation Modeling program was developed by federal defense contractors, and will give you a tremendous advantage in the highly competitive field of IT Security. This program will prepare you with the necessary skills for the protection of networks, communication, and data as well as the knowledge base for planning, implementing, and managing enterprise-level security and system integrity. </p>
            <a href="#" class="button hvr-sweep-to-top">Learn more</a>
      </div>
        <div class=" large-4 columns">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/stock4.jpg" alt="Stock Photo" />
            <h2>We're building a defense team</h2>
            <p>Our Cyber Security Simulation Modeling program was developed by federal defense contractors, and will give you a tremendous advantage in the highly competitive field of IT Security. This program will prepare you with the necessary skills for the protection of networks, communication, and data as well as the knowledge base for planning, implementing, and managing enterprise-level security and system integrity. </p>
            <a href="#" class="button hvr-sweep-to-top">Learn more</a>
      </div>
        <div class="large-4 columns">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/stock5.jpg" alt="Stock Photo" />
            <h2>We're building a defense team</h2>
            <p>Our Cyber Security Simulation Modeling program was developed by federal defense contractors, and will give you a tremendous advantage in the highly competitive field of IT Security. This program will prepare you with the necessary skills for the protection of networks, communication, and data as well as the knowledge base for planning, implementing, and managing enterprise-level security and system integrity. </p>
            <a href="#" class="button hvr-sweep-to-top">Learn more</a>
      </div>

<?php get_footer(); ?>
