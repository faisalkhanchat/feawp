<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

    
    <section class="logo_shows">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo_blk">
                        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/logo11.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="logo_blk">
                        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/logo22.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="logo_blk">
                        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/logo33.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="news_letter">
       <div class="container">
           <div class="row">
               <div class="col-sm-8 col-sm-offset-2">
                    <h3 class="sec_title">Signup for our e-newsletter</h3>
                   <div class="form-group">
                    <div class="input-group">
                      <input id="msg" type="text" class="form-control" name="msg" placeholder="Enter Your Email">
                      <button type="submit" class="input-group-addon">Sign up</button>
                      
                    </div>
                   </div>
                   <h4>SIGN UP FOR ALL LATEST PRODUCTS AND DEALS!:) </h4>
                </div>

           </div>
       </div>
                
    </section>
    
            
</main>

<?php 
if ( function_exists( 'ot_get_option' ) ) {
  $email_address = ot_get_option( 'email_address' );
  $contact_number = ot_get_option( 'contact_number' );
  $address_details = ot_get_option( 'address_details' );
  $copyright = ot_get_option( 'copyright' );
}
?>
   
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>what we do </h3>
                    <ul class="ullsit">
                        <li><a href="">Solid works 3D cad design</a></li>
                        <li><a href="">Solid works 3D cad design</a></li>
                        <li><a href="">Solid works 3D cad design</a></li>
                        <li><a href="">Solid works 3D cad design</a></li>
                        <li><a href="">Solid works 3D cad design</a></li>
                        <li><a href="">Solid works 3D cad design</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <h3>what we do </h3>
                    <ul class="list-unstyled">
                       <?php 
                        if ( function_exists( 'ot_get_option' ) ) {
                          /* get the slider array */
                          $slides = ot_get_option( 'social_media_links', array() );
                          if ( ! empty( $slides ) ) {
                            foreach( $slides as $slide ) {
                              echo '
                        <li>
                            <a href="'.$slide['href'].'">'.$slide['title'].''.$slide['name'].'</a>
                        </li>

                              ';
                            }
                          }

                         }
                        ?>
                       <!--
                        <li><a href=""><i class="fa fa-facebook"></i> Facebook </a></li>
                        <li><a href=""><i class="fa fa-twitter"></i> Twitter </a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i> Linkedin </a></li>
                        <li><a href=""><i class="fa fa-blog"></i> Blog </a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i> Google-plus </a></li>-->
                    </ul>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <h3>Contact Us</h3>
                    <ul class="contct_list">
                        <li> <?php echo $address_details ?> </li>
                        <li><a href="tel:<?php echo $contact_number ?>"><?php echo $contact_number ?></a></li>
                        <li><a href="mailto:<?php echo $email_address ?> "> <?php echo $email_address ?> </a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="copyright">
            <?php echo $copyright; ?>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/js/custom.js"></script>

<?php wp_footer(); ?>
  </body>
</html>

