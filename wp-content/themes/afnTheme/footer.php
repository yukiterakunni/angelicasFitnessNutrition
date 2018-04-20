    <!-- Footer -->
    <footer>
        <div class="container footer_afnc">
            <div class="row">
            	<div class="col-sm-2">
            		<img id="img-logo_footer" src="<?php bloginfo(stylesheet_directory)?>/img/LOGO_COLOR_AFN.png" alt="logo_img">
            	</div>
            	<div class="col-sm-4">
            		<h4>Contact us</h4>
                    <p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/phone.png" alt=""></span> (972) 363-5376</p>
<p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/phone_2.png" alt=""></span> (972) 599-0009</p>
                    <p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/mail.png" alt=""></span> hi@angelicasfitnessnutrition.com</p>
                    <p><span><img src="<?php bloginfo(stylesheet_directory)?>/img/address.png" alt=""></span> 18910 Preston Road #110 Dallas, Texas 75252</p>
            	</div>
            	<div class="col-sm-3">
                    <h4>Services</h4>
            		<?php
                    wp_nav_menu(
                            array(
                                'container' => false,
                                'items_wrap' => '<ul class="nav_footer">%3$s</ul>',
                                'theme_location' => 'bottom-menu')
                        );
                ?>
                </div>
                <div class="col-sm-3">
                    <h4>Follow us</h4>
            	    <ul>
                       <li style="
    list-style: none;
    padding: 5px;
    display: inline-block;
">
                           <a href="https://www.facebook.com/angelicasfitnessnutrition/" style="text-decoration-line:none;"><span class="icons icon-facebook-app-logo" id = "logo_facebook"></span></a>
                       </li>
                       <li style="
    list-style: none;
    padding: 5px;
    display: inline-block;
">
                           <a href="https://www.instagram.com/angelicasfitnessnutrition/" style="text-decoration-line:none;"><span class="icons icon-instagram-logo" id = "logo_instagram"></span></a>
                       </li>
                   </ul>
                </div>
            </div>
        </div>
    </footer>

	<div class="footer_orange">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-6">
        				<p>All rights reserved Angelicas 2017</p>
        			</div>
        			<div class="col-sm-6" style="text-align: right;">
        				<p>Design and Development for <a href="http://www.orangeagencydigirtal.net" class="orange_link"> OADD </a></p>
        			</div>
        		</div>
        	</div>
        </div>

    <!-- jQuery
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript
    <script src="js/clean-blog.min.js"></script>
-->
<?php
    wp_footer();
?>
</body>

</html>
