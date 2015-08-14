<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

      
<?php if(is_home()) { ?>  
    <div class="row affiliates">
          <a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/affil-waketech.jpg" alt="Affiliate" /></a>
          <a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/affil-ncworks.jpg" alt="Affiliate" /></a>
          <a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/affil-isg.jpg" alt="Affiliate" /></a>
          <a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/affil-capitalarea.jpg" alt="Affiliate" /></a>
          
          <div class="clear"></div>
      </div>
      </div>
    <?php }; ?>
      
      
 <section id="footer">    
    <div class="row">
        <div class="large-4 columns">
            <ul class="social">
                <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-fb.jpg" alt="Facebook" /></a></li>
                <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-twitter.jpg" alt="Twitter" /></a></li>
                <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-google.jpg" alt="Google Plus" /></a></li>
            </ul>
            
            <a href="mailto:info@emailaddress.com">info@emailaddress.com</a><br />
            (555) 555-5555<br /><Br />
            <span class="copy">&copy; Copyright 2015 CASM</span>
        </div>
        <div class="large-4 columns"><span class="yellow">@twitterfeed</span></div>
        <div class="large-4 columns">
            <div id="newsletter">
                <span class="yellow">Ready to enroll?</span><br ?>
                
                <input type="text" id="subject" placeholder="You can add a subject" /><br />
                Message<br />
                <textarea id="message" placeholder="Leave a message" rows="7"></textarea><br />
                <a href="#" class="button hvr-sweep-to-top">Send mail</a>                
            </div>
        </div>
    </div>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

<?php wp_footer(); ?>

</body>
</html>
